<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->roles === 'common.superadmin') {
            return $next($request);
        }
        if (Auth::user() && Auth::user()->roles === 'common.admin') {
            return $next($request);
        }
        abort(403);

        // if (!$request->user()->roles($role)) {
        //     abort(403);
        // }

        // return $next($request);
    }
}
