<?php

namespace App\Http\Controllers;

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
        return view('payment-address.index', compact('paymentAddresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::all();
        return view('payment-address.create', compact(['assets']));
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
        ]);

        $asset = Asset::find($request->asset_id);
        $paymentAddress = PaymentAddress::create([
            'address' => $request['payment_address'],
        ]);

        $paymentAddress->asset()->associate($asset);
        $paymentAddress->save();
        return redirect()
            ->back()
            ->with('message', 'payment address created  successfully!');
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
        return view('payment-address.edit', compact('paymentAddress'));
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
        $request->all();
        $paymentAddress->update($request->all());
        // dd($paymentAddress);
        return redirect()
            ->back()
            ->with('message', 'Payment address  updated  successfully!');
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
