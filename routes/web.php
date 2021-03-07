<?php
// C Frontend 
Route::get('/', 'F_home@home');
Route::get('/about', 'F_home@about');


// C backend
// C Dashboard
Route::get('/dash', 'C_home@dashboard');
// C Admin
Route::get('/dash/data-admin', 'C_admin@data_admin');

// C Auth
Route::get('/login-page', 'C_auth@login');
Route::post('/login', 'C_auth@proseslogin');
Route::get('/signup-page', 'C_auth@signup');
Route::get('/forgotpass-page', 'C_auth@forgotpass');
Route::post('/send-request', 'C_auth@forgotpass_mail');
