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
            'mobilenumber' => ['required', 'numeric', 'min:11'],
            'country' => ['required', 'string'],
            'code' => ['required', 'numeric'],
            'state' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'fullname' => $input['fullname'],
            'email' => $input['email'],
            'country' => $input['country'],
            'code' => $input['code'],
            'state' => $input['state'],

            'mobilenumber' => $input['mobilenumber'],
            'password' => Hash::make($input['password']),
        ]);
        $wallet = Wallet::create([]);
        $user->wallet()->save($wallet);
        return $user;
    }
}
