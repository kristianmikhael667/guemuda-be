<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class RegisterUserAPI extends Controller
{
    public function sendVerificationEmail(Request $request){
        if($request->user()->hasVerifiedEmail()){
            return ResponseFormatter::error(
                null,
                'Already Verified'
            );
        }
        $request->user()->sendEmailVerificationNotification();
        return ResponseFormatter::success(
            null,
            'Verification Link Sent'
        );
    }

    public function verify(EmailVerificationRequest $request){
        if($request->user()->hasVerifiedEmail()){
            return ResponseFormatter::error(
                null,
                'Email Already Verified'
            );
        }
        if($request->user()->markEmailAsVerified()){
            event(new Verified($request->user()));
        }
        return ResponseFormatter::success(
            null,
            'Email has been Verified'
        );
    }
}
