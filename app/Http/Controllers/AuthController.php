<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            if(Auth::user()->user_type == 1)
            {
                return redirect('/admin/dashboard');
            }
            else if(Auth::user()->user_type == 2)
            {
                return redirect('/teacher/dashboard');
            }
            else if(Auth::user()->user_type == 3)
            {
                return redirect('/student/dashboard');
            }
            else if(Auth::user()->user_type == 4)
            {
                return redirect('/parent/dashboard');
            }
            else
            {
                Auth::logout();
                return redirect('/login');
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
