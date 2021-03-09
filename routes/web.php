<?php

// C Frontend 
Route::get('/', 'Frontend\F_home@home');
Route::get('/about', 'Frontend\F_home@about');


// C backend

// C Admin\

// C Auth
Route::get('/login-page', 'Backend\C_auth@login');
Route::post('/login', 'Backend\C_auth@proseslogin');

Route::get('/signup-page', 'Backend\C_auth@signup');
Route::post('/signup', 'Backend\C_auth@prosessignup');

Route::get('/forgotpass-page', 'Backend\C_auth@forgotpass');
Route::post('/send-request', 'Backend\C_auth@forgotpass_mail');

Auth::routes();

Route::get('/dash', 'Backend\C_home@dashboard');
Route::get('/dashboard', 'Backend\C_home@dashboard');
Route::get('/dash/data-admin', 'Backend\C_admin@data_admin');

Route::get('/home', 'HomeController@index')->name('home');
