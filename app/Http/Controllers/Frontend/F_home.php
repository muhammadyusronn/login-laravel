<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
