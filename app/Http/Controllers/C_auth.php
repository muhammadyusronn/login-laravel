<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_auth extends Controller
{
    //
    public function login()
    {
        $data['title'] = 'Login';
        return view('login-page', $data);
    }

    public function signup()
    {
        $data['title'] = 'Sign UP';
        return view('signup-page', $data);
    }

    public function forgotpass()
    {
        $data['title'] = 'Forgot Password';
        return view('forgotpass-page', $data);
    }
}
