<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'mobilenumber' => ['required', 'string'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->validate();

        $explodedInput = explode("/", $input['country']);
        $country = $explodedInput[0];
        $code = $explodedInput[1];


        $user = User::create([
            'fullname' => $input['fullname'],
            'email' => $input['email'],
            'country' => $country,
            'country_code' => $code,
            'state' => $input['state'],
            'mobilenumber' => $input['mobilenumber'],
            'password' => Hash::make($input['password']),
        ]);

        $wallet = Wallet::create([]);
        $user->wallet()->save($wallet);

        return $user;
    }
}
