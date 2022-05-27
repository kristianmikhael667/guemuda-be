<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Carbon\Carbon;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Helpers\ResponseFormatter;

class SocialAPI extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user['id'])->first();

            if ($finduser) {
                // Auth::login($finduser);
                $tokenResult = $finduser->createToken('authToken')->plainTextToken;
                return ResponseFormatter::success([
                    'access_token' => $tokenResult,
                    'token_type' => 'Bearer',
                    'user' => $finduser
                ], 'Authenticated');
                // return redirect()->intended('dashboard');
            } else {
                $role = Role::where(['name' => 'subscribe'])->get();

                $newUser = User::create([
                    'first_name' => $user['given_name'],
                    'last_name' => $user['family_name'],
                    'username' => mt_rand(0, 0x3fff),
                    'address' => "-",
                    'city' => "-",
                    'job' => "-",
                    'bio' => "-",
                    'phone_number' => mt_rand(0, 0x3fff),
                    'date_birth' => Carbon::now(),
                    'roles' => $role[0]->id,
                    'rolesname' => $role[0]->name,
                    'email' => $user['email'],
                    'google_id' => $user['id'],
                    'password' => encrypt('123456dummy')
                ]);

                $tokenResult = $newUser->createToken('authToken')->plainTextToken;
                return ResponseFormatter::success([
                    'access_token' => $tokenResult,
                    'token_type' => 'Bearer',
                    'user' => $newUser
                ], 'New Authenticated');

                // Auth::login($newUser);

                // return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
