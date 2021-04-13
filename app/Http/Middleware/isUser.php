<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isUser
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('customer')->check()){
            return redirect()->route('user.login');
        }

        return $next($request);
    }
}
