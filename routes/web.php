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
    Route::get('profile/{admin}', 'AdminController@getAdminDetails')->name('admin.show');
    Route::get('edit/{admin}', 'AdminController@getEditAdmin')->name('admin.edit');
    Route::post('profile/{admin}', 'AdminController@updateAdmin')->name('admin.update');

    # Design Routes
    Route::get('open-designs', 'AdminController@getAllOpenDesigns')->name('admin.design.open');
    Route::get('in-progress-designs', 'AdminController@getAllInProgressDesigns')->name('admin.design.inprogress');
    Route::get('finished-designs', 'AdminController@getAllFinishedDesigns')->name('admin.design.finished');

    # User Routes
    Route::get('users', 'AdminController@getAllActiveUsers')->name('admin.user.index');
    Route::get('trashed-users', 'AdminController@getAllTrashedUsers')->name('admin.user.trashed');
    Route::get('users/{user}', 'AdminController@getUserDetails')->name('admin.user.show');
    Route::get('users/edit/{user}', 'AdminController@getEditUser')->name('admin.user.edit');
    Route::post('users/{user}', 'AdminController@updateUser')->name('admin.user.update');
    Route::delete('users/{user}', 'AdminController@deleteUser')->name('admin.user.delete');
    Route::put('users/{id}', 'AdminController@restoreUser')->name('admin.user.restore');
    Route::delete('users/force/{id}', 'AdminController@destroyUser')->name('admin.user.destroy');

});
