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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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
            $findemail = User::where('email', $user['email'])->first();

            if ($finduser) {
                // Auth::login($finduser);
                $tokenResult = $finduser->createToken('authToken')->plainTextToken;
                // return ResponseFormatter::success([
                //     'access_token' => $tokenResult,
                //     'token_type' => 'Bearer',
                //     'user' => $finduser
                // ], 'Authenticated');
                // http://front.dewanhoster.my.id/email_verify_url?verify=
                return Redirect::to('http://front.dewanhoster.my.id/google?user=' . $finduser . '&' . 'token=' . $tokenResult)->with(['user' => $finduser, 'tokem' => $tokenResult]);

                // return redirect()->intended('dashboard');
            } else if ($findemail && $finduser == null) {
                $updated = DB::table('users')->where('email', $user['email'])->update([
                    'google_id' => $user['id'],
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                $cekuser = User::where('email', $user['email'])->first();
                $tokenResult = $cekuser->createToken('authToken')->plainTextToken;
                return Redirect::to('http://front.dewanhoster.my.id/google?user=' . $cekuser . '&' . 'token=' . $tokenResult)->with(['user' => $finduser, 'tokem' => $tokenResult]);
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
                    'email_verified_at' => now(),
                    'status' => 'accept',
                    'password' => encrypt('123456dummy')
                ]);

                $tokenResult = $newUser->createToken('authToken')->plainTextToken;
                // return ResponseFormatter::success([
                //     'access_token' => $tokenResult,
                //     'token_type' => 'Bearer',
                //     'user' => $newUser
                // ], 'New Authenticated');
                return Redirect::to('http://front.dewanhoster.my.id/google?user=' . $newUser . '&' . 'token=' . $tokenResult)->with(['user' => $finduser, 'tokem' => $tokenResult]);

                // Auth::login($newUser);

                // return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
