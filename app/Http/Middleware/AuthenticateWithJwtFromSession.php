<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateWithJwtFromSession
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('jwt_token')) {
            try {
                JWTAuth::setToken(session('jwt_token'))->authenticate();
            } catch (\Exception $e) {
                // return response()->json(['error' => 'Unauthorized'], 401);
                return redirect('/user-login');
            }
        } else {
            // return response()->json(['error' => 'Token not found in session'], 401);
            return redirect('/user-login');
        }

        return $next($request);
    }
}
