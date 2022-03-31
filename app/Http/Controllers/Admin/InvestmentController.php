<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Duration;
use App\Models\Category;
use App\Models\Asset;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investments = Investment::with(['asset', 'category', 'duration', 'user'])->desc()->paginate(25);
        // return $investments;
        return view('admin.investment.index', compact('investments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function show(Investment $investment)
    {
        $duration = Duration::where('id', $investment->duration_id)->get();
        $asset = Asset::where('id', $investment->asset_id)->get();
        $category = Category::where('id', $investment->category_id)->get();

        // dd($duration, $asset, $category);
        return view(
            'admin.investment.show',
            compact(['investment', 'duration', 'asset', 'category'])
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $investment)
    {
        return view('admin.investment.edit', compact('investment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        if ($request->approved) {
            if (
                $investment->status == 'pending' ||
                $investment->status == 'cancelled'
            ) {
                $investment->status = 'completed';

                $investment->save();
            }
        } elseif ($request->cancel) {
            if ($investment->status == 'pending') {
                $investment->status = 'cancelled';

                $investment->save();
            }
        } else {
            $request->validate([
                'rate' => ['required', 'string', 'max:255'],
                'amount' => ['required', 'string', 'max:255'],
            ]);

            $investment->update($request->all());

            return redirect()
                ->back()
                ->with('success', 'Investment  updated  successfully!');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
