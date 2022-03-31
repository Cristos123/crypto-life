<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Duration;
use App\Models\Category;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvestmentController extends Controller
{
    public function store(Request $request)
    {
        $duration = Duration::findOrFail($request->durationId);
        $asset = Asset::findOrFail($request->assetId);
        $category = Category::findOrFail($request->categoryId);

        $request->validate([
            'amount' => ['required', 'numeric', 'min:1'],
        ]);

        $amount = floatval($request['amount']) * 100;

        if (!auth()->user()->isSufficient($amount)) {
            return back()->with(
                'error',
                'Insufficient balance. Please make a deposit and try again.'
            );
        }

        DB::beginTransaction();

        try {
            // Debit the user
            auth()->user()->debit($amount);

            $investment = Investment::create([
                'rate'      => random_int(5, 50),
                'amount'    => $amount,
                'status'    => 'pending',
                'user_id'   => auth()->id(),
                'reference' => 'INV-'.Str::random(10),
                'last_total'=> $amount,
            ]);

            $investment->asset()->associate($asset);

            $investment->category()->associate($category);

            $investment->duration()->associate($duration);

            $investment->save();

        } catch(\Throwable $ex) {
            DB::rollBack();
            report($ex);

            return back()
            ->with('error', 'Investment Failed. An error occured, try again in some minutes!');
        }

        DB::commit();

        return redirect()
            ->back()
            ->with('success', 'Investment  created  successfully!');
    }

}
