<?php

namespace App\Http\Controllers\Api;

use App\Actions\Fortify\PasswordValidationRules;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class AuthAPI extends Controller
{
    use PasswordValidationRules;
    public function register(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'username' => 'required|unique:users',
                'email' => 'required|string|max:255|unique:users',
                'phone_number' => 'required',
                'password' => 'required|confirmed',
                // 'password' => $this->passwordRules()
            ]);
            $role = Role::where(['name' => 'subscribe'])->get();
            $users = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'address' => $request->address ? $request->address : "-",
                'city' => $request->city ? $request->city : "-",
                'job' => $request->job ? $request->job : "-",
                'bio' => $request->bio ?  $request->bio : "-",
                'phone_number' => $request->phone_number,
                'date_birth' => $request->date_birth ? $request->date_birth : Carbon::now(),
                'roles' => $role[0]->id,
                'rolesname' => $role[0]->name,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($users));

            $user = User::where('email', $request->email)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Somethings variable wrong',
                'datas' => $request,
                'error' => $error
            ], 'Authentication Failed', 500);
            // dd($error);
        }

        // $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'username' => 'required|unique:users',
        //     'email' => 'required|string|max:255|unique:users',
        //     'password' => ['required', 'confirmed', Password::defaults()],
        // ]);

        // $user = User::create([
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'address' => $request->address,
        //     'city' => $request->city,
        //     'job' => $request->job,
        //     'bio' => $request->bio,
        //     'phone_number' => $request->phone_number,
        //     'date_birth' => $request->date_birth,
        //     'password' => Hash::make($request->password),
        // ]);
        // event(new Registered($user));

        // $token = $user->createToken('authtoken');

        // return response()->json(
        //     [
        //         'message' => 'User Registered',
        //         'data' => ['token' => $token->plainTextToken, 'user' => $user]
        //     ]
        // );
    }

    public function login(LoginRequest $request)
    {
        try {
            $request->authenticate();
            $token = $request->user()->createToken('authtoken');
            return ResponseFormatter::success([
                'access_token' => $token->plainTextToken,
                'token_type' => 'Bearer',
                'user' => array(
                    "id" => $request->user()->id,
                    "first_name" => $request->user()->first_name,
                    "last_name" => $request->user()->last_name,
                    "email" => $request->user()->email,
                    "username" => $request->user()->username,
                    "phone_number" => $request->user()->phone_number,
                    "status" => $request->user()->status,
                    "email_verify" => $request->user()->email_verified_at,
                    "rolesname" => $request->user()->rolesname
                )
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Somethings variable wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();
        return ResponseFormatter::success($token, 'Token Revoked');
    }
}
