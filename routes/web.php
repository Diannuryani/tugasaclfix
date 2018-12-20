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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::GET('admin/home','adminController@index');
Route::GET('admin','admin\LoginController@showLoginFrom')->name('admin.login');
Route::POST('admin','admin\LoginController@login');
Route::POST('admin-password/email','admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','admin\ForgotPasswordController@sendResetLinkRequestFrom')->name('admin.password.request');
Route::POST('admin-password/reset','admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','admin\ResetPasswordController@showResetFrom')->name('admin.password.reset');