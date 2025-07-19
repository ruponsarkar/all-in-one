<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateWithJwtFromSession
{
    public function handle(Request $request, Closure $next)
    {
        $token = session('jwt_token') ?? $request->cookie('jwt_token');
    
        if ($token) {
            try {
                JWTAuth::setToken($token)->authenticate();
            } catch (\Exception $e) {
                return redirect('/user-login')->with('error', 'Session expired, please login again.');
            }
        } else {
            return redirect('/user-login')->with('error', 'Please login to continue.');
        }
    
        return $next($request);
    }
    
}
