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
Route::get('designs', 'DesignController@index')->name('design.index');
Route::get('designs/create', 'DesignController@create')->name('design.create');
Route::post('designs', 'DesignController@store')->name('design.store');
Route::get('designs/{design}', 'DesignController@show')->name('design.show');
Route::post('designs/{design}', 'DesignController@updateTake')->name('design.update.take');
Route::put('designs/{design}', 'DesignController@updateDrop')->name('design.update.drop');
Route::patch('designs/{design}', 'DesignController@updateFinish')->name('design.update.finish');


Route::group(['prefix' => 'admin'], function() {
	Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'AdminAuth\LoginController@login')->name('admin.login');
	Route::get('/', 'AdminController@index')->name('admin.home');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
    Route::get('password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'AdminAuth\ResetPasswordController@reset')->name('admin.password.update');
    Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'AdminAuth\RegisterController@register')->name('admin.register');

});
