<?php
// C Home
Route::get('/', 'C_home@dashboard');

// C Admin
Route::get('/data-admin', 'C_admin@data_admin');

// C Auth
Route::get('/login-page', 'C_auth@login');
Route::get('/signup-page', 'C_auth@signup');
Route::get('/forgotpass-page', 'C_auth@forgotpass');
