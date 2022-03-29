<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentAddress;
use Illuminate\Http\Request;
use App\Models\Asset;

class PaymentAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentAddresses = paymentAddress::paginate(25);
        return view('admin.payment-address.index', compact('paymentAddresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::all();
        return view('admin.payment-address.create', compact(['assets']));
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
            'payment_address' => ['required', 'string', 'max:255'],
            'asset_id' => ['required', 'string'],
        ], [
            'asset_id.required' => 'You must select a currency.'
        ]);

        $asset = Asset::findOrFail($request->asset_id);
        $paymentAddresses = $asset->payment_address;

        foreach ($paymentAddresses as $paymentAddress) {
            if ($paymentAddress->default == true) {
                $paymentAddress->default = false;
                $paymentAddress->save();
            }

            if (
                $paymentAddress->address == $request['payment_address'] &&
                $paymentAddress->asset_id == $request->asset_id
            ) {
                return back()->with(
                    'error',
                    'You already have this specific wallet address!'
                );
            }
        }

        $paymentAddress = PaymentAddress::create([
            'address' => $request['payment_address'],
            'default' => true,
        ]);

        $paymentAddress->asset()->associate($asset);
        $paymentAddress->save();

        return redirect()
            ->back()
            ->with('success', 'payment address created  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentAddress  $paymentAddress
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentAddress $paymentAddress)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentAddress  $paymentAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentAddress $paymentAddress)
    {
        return view('admin.payment-address.edit', compact('paymentAddress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentAddress  $paymentAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentAddress $paymentAddress)
    {
        $request->validate([
            'address' => ['required', 'string', 'max:255'],
        ]);

        $paymentAddress->update($request->all());
        // dd($paymentAddress);
        return redirect()
            ->back()
            ->with('success', 'Payment address  updated  successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentAddress  $paymentAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentAddress $paymentAddress)
    {
        $paymentAddress->delete();
        return redirect()->back();
    }
}
