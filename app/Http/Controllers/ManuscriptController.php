<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class ManuscriptController extends Controller
{
    //

    function user_register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            // 'middle_name'  => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5|same:re_password',
            're_password' => 'required|string|min:5',
            // 'captcha'    => 'required|captcha', // if using real captcha
        ], [
            'password.same' => 'Password and Repeat Password must match.',
        ]);

        // You can proceed to create a user here
        $user = User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'university' => $request->university,
            'department' => $request->department,
            'city' => $request->city,
            'country' => $request->country,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        $token = JWTAuth::fromUser($user);

        // return response()->json(compact('user', 'token'), 201);
        return redirect()->back()->with('success', 'Registration successful!');

    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Invalid Credentials'], 401);
        }

        session(['jwt_token' => $token]);

        return redirect('/user-dashboard');
    }


    public function profile()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        try {
            JWTAuth::setToken(session('jwt_token'))->invalidate();
        } catch (\Exception $e) {
            // Token might be already invalidated
        }

        session()->forget('jwt_token');

        return redirect('/')->with('message', 'Logged out successfully');
    }


    function dashboard()
    {
        return view('JIT.manuscript.user-dashboard');
    }






}
