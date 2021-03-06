<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_admin extends Controller
{
    public function data_admin()
    {
        $data['title'] = 'Master';
        $data['sub_title'] = 'Admin';
        return view('admin-data', $data);
    }
}
