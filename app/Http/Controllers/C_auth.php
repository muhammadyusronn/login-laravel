<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class C_auth extends Controller
{
    //
    public function login()
    {
        $data['title'] = 'Login';
        return view('backend/login-page', $data);
    }

    public function proseslogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data['title'] = 'Dashboard';
        return view('backend/dashboard', $data);
    }

    public function signup()
    {
        $data['title'] = 'Sign UP';
        return view('backend/signup-page', $data);
    }

    public function forgotpass()
    {
        $data['title'] = 'Forgot Password';
        return view('backend/forgotpass-page', $data);
    }

    public function forgotpass_mail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $data = array(
            'email' => $request->email,
            'name' => 'Tes Nama',
            'message' => 'tes message',
        );
        Mail::to('muhammadyusron733@gmail.com')->send(new SendEmail($data));
        return back()->with('success', 'Thanks For Contact Us');
    }
}
