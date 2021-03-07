<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class C_home extends Controller
{
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('backend/dashboard', $data);
    }
}
