<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KYC;
use Illuminate\Http\Request;

class KYCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kycs = KYC::paginate(25);
        return view('admin.kyc.index', compact('kycs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function show(KYC $kyc)
    {
        return view('admin.kyc.show', compact('kyc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KYC $kyc)
    {
        if ($request->approved || $kyc->status == 'rejected') {
            if ($kyc->status == 'pending') {
                $kyc->status = 'succeed';

                $kyc->save();
            }
        } elseif ($request->rejected) {
            if ($kyc->status == 'pending') {
                $kyc->status = 'rejected';

                $kyc->save();
            }
        }

        return redirect()->back()->with('success', 'KYC updated accordingly.');
    }
}
