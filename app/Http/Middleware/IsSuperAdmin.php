<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsSuperAdmin
{
    public function handle(Request $request, Closure $next)
    {
        var_dump($request);
        die;
        if (Auth::user() && Auth::user()->roles == 'common.superadmin') {
            return $next($request);
        }
        return redirect('/login');
    }
}
