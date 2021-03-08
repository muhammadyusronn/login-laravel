<?php

use RealRashid\SweetAlert\Facades\Alert;

Route::get('/tes', function () {
    //
    Alert::success('hai');
    return view('welcome');
});

// C Frontend 
Route::get('/', 'Frontend\F_home@home');
Route::get('/about', 'Frontend\F_home@about');


// C backend
// C Dashboard
Route::get('/dash', 'Backend\C_home@dashboard');
// C Admin
Route::get('/dash/data-admin', 'Backend\C_admin@data_admin');

// C Auth
Route::get('/login-page', 'Backend\C_auth@login');
Route::post('/login', 'Backend\C_auth@proseslogin');
Route::get('/signup-page', 'Backend\C_auth@signup');
Route::get('/forgotpass-page', 'Backend\C_auth@forgotpass');
Route::post('/send-request', 'Backend\C_auth@forgotpass_mail');
