<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'username' => $input['username'],
                'first_name' => 'Gio',
                'last_name' => 'Dev-Admin',
                'address' => 'Jl. Doomo Hayam Wuruk',
                'city' => 'Jakarta',
                'job' => 'Administrator',
                'bio' => 'Admin',
                'phone_number' => '08512838492939',
                'email' => $input['email'],
                'date_birth' => date("Y/m/d"),
                'password' => Hash::make($input['password']),
                'roles' => 'common.admin'
            ]), function (User $user) {
                // $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    // protected function createTeam(User $user)
    // {
    //     $user->ownedTeams()->save(Team::forceCreate([
    //         'user_id' => $user->id,
    //         'name' => explode(' ', $user->name, 2)[0] . "'s Team",
    //         'personal_team' => true,
    //     ]));
    // }
}
