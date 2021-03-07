<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_home extends Controller
{
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('backend/dashboard', $data);
    }
}
