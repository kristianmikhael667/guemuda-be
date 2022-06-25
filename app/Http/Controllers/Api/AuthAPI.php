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
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthAPI extends Controller
{
    use PasswordValidationRules;
    public function register(Request $request)
    {
        /*
        Versi auth sanctum
        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'username' => 'required|unique:users',
                'email' => 'required|string|max:255|unique:users',
                'phone_number' => 'required',
                'password' => 'required|confirmed',
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
        } */

        // Versi Token JWT
        //Validate data
        $data = $request->only('first_name', 'last_name', 'username', 'email', 'phone_number', 'password', 'password_confirmation');
        $validator = Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|string|max:255|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }
        $role = Role::where(['name' => 'subscribe'])->get();

        $user = User::create([
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
        event(new Registered($user));

        //User created, return success response
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ], Response::HTTP_OK);
    }

    public function login(LoginRequest $request)
    {
        /* Use Token Sanctum
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
         } */

        // Use Token JWT
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        $getuser = User::where('email', $credentials['email'])->first();

        try {
            if (!$token = JWTAuth::attempt($credentials, ['exp' => Carbon::now()->addDays(1)->timestamp])) {
                return response()->json([
                    'status' => 'invalid',
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                ], 400);
            }
            if ($getuser->email_verified_at == null) {
                return response()->json([
                    'status' => 'noverify',
                    'error' => false,
                    'message' => 'Your Email must verify',
                ], 400);
            }
        } catch (JWTException $e) {
            return $credentials;
            return response()->json([
                'success' => false,
                'message' => 'Could not create token.',
            ], 500);
        }

        //Token created, return with success response and jwt token
        return response()->json([
            'status' => 'success',
            'success' => true,
            'token' => $token,
            'users' => $getuser,
            'expired' => Carbon::now()->addDays(1)->timestamp
        ]);
    }

    public function logout(Request $request)
    {
        // Use Token Sanctum
        // $token = $request->user()->currentAccessToken()->delete();
        // return ResponseFormatter::success($token, 'Token Revoked');

        // Use Token JWT
        $validator = Validator::make($request->only('token'), [
            'token' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is validated, do logout        
        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                'success' => true,
                'message' => 'User has been logged out'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, user cannot be logged out'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
