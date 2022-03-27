<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\PaymentAddress;
use Illuminate\Validation\Rule;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::paginate(25);
        return view('asset.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asset.create');
    }

    public function changeDefaultAddress(Request $request, $id)
    {
        $paymentAddress = PaymentAddress::where('default', true)
            ->where('asset_id', $request->asset_id)
            ->get();

        foreach ($paymentAddress as $defaultAddress) {
            if ($defaultAddress->default == true) {
                $defaultAddress->default = false;
                $defaultAddress->save();
            }
        }
        $paymentAddress = PaymentAddress::find($id);

        if ($request->default) {
            if ($paymentAddress->default == false) {
                $paymentAddress->default = true;
                $paymentAddress->save();
            } else {
                $paymentAddress->default = false;
                $paymentAddress->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique(Asset::class),

                'string',
                'max:255',
            ],
            'currency' => ['required', 'string', Rule::unique(Asset::class)],
        ]);
        Asset::create([
            'name' => $request['name'],
            'currency' => $request['currency'],
        ]);

        return redirect()
            ->back()
            ->with('success', 'Asset created  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        // payment_address
        $assetWithAdress = $asset->payment_address;
        // return $assetWithAdress;
        return view('asset.show-address', compact('assetWithAdress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        return view('asset.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'currency' => ['required', 'string', 'max:255'],
        ]);

        $asset->name = $request->name;
        $asset->currency = $request->currency;
        $asset->save();
        return redirect()
            ->back()
            ->with('success', 'Asset   updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->back();
    }
}
