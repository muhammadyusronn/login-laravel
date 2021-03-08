<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use Illuminate\Support\Facades\Auth;

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

        $validator = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data['title'] = 'Dashboard';
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dash')->with('success', 'Welcome!');
        } else {
            return redirect('login-page')->with('errors', 'Incorrect email or password!');
        }
    }

    public function signup()
    {
        $data['title'] = 'Sign UP';
        return view('backend/signup-page', $data);
    }
    public function prosessignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => ' required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->passwprd)
        ]);
        return redirect('login-page')->with('success', 'registration is successful');
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
        return redirect('forgotpass-page')->with('success', 'Please check your email to reset your password!');
    }
}
