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
}
