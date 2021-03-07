<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class F_home extends Controller
{
    //
    public function home()
    {
        $data['title'] = 'Kampus Indonesia';
        return view('frontend/home', $data);
    }
    public function about()
    {
        $data['title'] = 'About Kampus Indonesia';
        return view('frontend/about', $data);
    }
}
