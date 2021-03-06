<?php

Route::get('/', 'C_home@dashboard');

Route::get('/data-admin', 'C_admin@data_admin');
Route::get('/login-page', 'C_auth@login');
