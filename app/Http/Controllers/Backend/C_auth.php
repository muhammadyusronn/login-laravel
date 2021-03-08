<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $to_name = $request->name;
        $to_email = $request->email;
        Mail::send("emails.mail", ['name' => $to_name], function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject("Reset Password");
            $message->from("learningcyberlabswj@gmail.com", "Kampus Indonesia");
        });
        return back()->with('success', 'Please cek yout email to reset your password!');
    }
}
