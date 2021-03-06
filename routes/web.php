<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/exam', function () {
    return view('exam');
});
Route::get('/assignment', function () {
    return view('assignment');
});
Route::get('/medical', function () {
    return view('medical');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin');    
    Route::get('/', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'Admin\LoginController@login');
    Route::post('/admin-password/email', 'Admin\FogotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/admin-password/reset', 'Admin\FogotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/admin-password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('/admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    });