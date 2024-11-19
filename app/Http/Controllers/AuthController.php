<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        // dd(Hash::make('123456'));
        if(!empty(Auth::check()))
        {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}