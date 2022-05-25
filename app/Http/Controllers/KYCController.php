<?php

namespace App\Http\Controllers;

use App\Models\KYC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KYCController extends Controller
{
    public function create()
    {
        $kyc = Auth::user()->kyc;
        if (!is_null($kyc)) {
            return view('user.kyc.kyc-verify');
        }
        return view('user.kyc.kyc-verifcation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'image', 'mimes:jpeg,png', 'max:2048'],
            'identification' => [
                'required',
                'image',
                'mimes:jpeg,png',
                'max:2048',
            ],
            // 'ssn' => ['required', 'alpha_num'],
            'identificationType' => ['required', 'string'],
            'dob' => ['date_format:d-m-Y'],
        ]);

        // Uploading the identification

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
            'ssn' => "---",
            'date_of_birth' => date(
                'Y-m-d',
                strtotime($request['dob'])
            ),
            'type' => $request['identificationType'],
            'user_id' => Auth::user()->id,
        ]);

        return back()->with(
            'success',
            'Verification successfully!'
        );
    }
}
