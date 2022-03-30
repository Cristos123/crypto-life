<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Duration;
use App\Models\Category;
use App\Models\Asset;
use Illuminate\Http\Request;

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

        $investment = Investment::create([
            'rate' => random_int(5, 50),
            'amount' => intval($request['amount']) * 100,
            'status' => 'pending',
        ]);

        $investment->asset()->associate($asset);

        $investment->category()->associate($category);

        $investment->duration()->associate($duration);

        $investment->save();

        return redirect()
            ->back()
            ->with('success', 'Investment  created  successfully!');
    }

}
