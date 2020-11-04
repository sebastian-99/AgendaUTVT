<?php


/* Route::get('/', function () {
    return view('welcome');
}); */

// Authentication Routes... 
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login'); 
Route::post('login', 'Auth\LoginController@login')->name('loginAuth'); 
Route::post('logout', 'Auth\LoginController@logout')->name('logout'); 
// Registration Routes... 
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register'); 
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes... 
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm'); 
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail'); 
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm'); 
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
