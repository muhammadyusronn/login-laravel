<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class C_admin extends Controller
{
    public function data_admin()
    {
        $data['title'] = 'Master';
        $data['sub_title'] = 'Admin';
        return view('backend/admin-data', $data)->with('success', 'Login Success!');
    }
}
