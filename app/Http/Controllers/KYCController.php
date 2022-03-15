<?php

namespace App\Http\Controllers;

use App\Models\KYC;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

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
        return view('kyc.admin-dashboard', compact('kycs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kyc = Auth::user()->kyc;
        if (Auth::user()->has('kyc') || $kyc->status == 'pending') {
            return view('kyc.kyc-verify');
        }
        return view('kyc.kyc-verifcation');
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
            'fullname' => ['required', 'string', 'max:255'],
            'photo' => ['max:2048|mimes:jpeg,png,'],
            'identification' => ['max:2048|mimes:jpeg,png,'],
            'ssn' => ['alpha_num'],
            'identificationType' => ['required', 'string'],
            'date_of_birth' => ['date_format:d/m/Y'],
        ]);
        $request->all();
        // Uploading the identification
        if (!$request->has('photo')) {
            return response()->json(
                ['message' => 'Please upload your photo'],
                422
            );
        } elseif (!$request->has('identification')) {
            return response()->json(
                ['message' => 'Please upload your identification'],
                422
            );
        }

        $identificationFile = $request->file('identification');
        $filename =
            Str::slug(Str::random(2), '-') .
            time() .
            '.' .
            $identificationFile->extension();

        $pathToIdentification = $identificationFile->storeAs(
            'identifications',
            $filename
        );

        // Uploading the photo
        $photoFile = $request->file('photo');
        $filename =
            Str::slug(Str::random(2), '-') .
            time() .
            '.' .
            $photoFile->extension();

        $pathToPhoto = $photoFile->storeAs('photos', $filename);

        $kyc = KYC::create([
            'identification' => $pathToIdentification,
            'photo' => $pathToPhoto,
            'fullname' => $request['fullname'],
            'ssn' => $request['ssn'],
            'date_of_birth' => date(
                'Y-m-d',
                strtotime($request['date_of_birth'])
            ),
            'type' => $request['identificationType'],
            'user_id' => Auth::user()->id,
        ]);

        $kyc->save();

        return view('kyc.kyc-verify')->with(
            'success',
            'Verification successfully!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function show(KYC $kyc)
    {
        return view('kyc.show', compact('kyc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function edit(KYC $kYC)
    {
        //
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
        if ($request->approved) {
            if ($kyc->status == 'pending') {
                $kyc->status = 'succeed';

                $kyc->save();
            } elseif ($kyc->status == 'rejected') {
                $kyc->status = 'succeed';
                $kyc->save();
            }
        } elseif ($request->rejected) {
            if ($kyc->status == 'pending') {
                $kyc->status = 'rejected';

                $kyc->save();
            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function destroy(KYC $kYC)
    {
        //
    }
}
