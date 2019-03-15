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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ClientController@create')->name('design.create');
Route::post('designs', 'ClientController@store')->name('design.store');
Route::get('designs/{design}', 'ClientController@show')->name('design.show');

# Designer
Auth::routes();

Route::group(["prefix" => "designer", "name.designer."], function() {
    Route::get('/dashboard', 'DesignerController@home')->name('home');
    Route::get('profile', 'DesignerController@getUserDetails')->name('user.show');

    Route::group(["prefix" => "designs", "name" => "designer.design."], function() {
        Route::get('/', 'DesignerController@index')->name('index');
        Route::post('/{design}', 'DesignerController@takeOrder')->name('take');
        Route::put('/{design}', 'DesignerController@dropOrder')->name('drop');
        Route::patch('/{design}', 'DesignerController@orderFinished')->name('finish');
    });
});

// AdminAuth
Route::group(["prefix" => "admin", "namespace" => "AdminAuth"], function() {

    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');
    Route::post('/logout', 'LoginController@logout')->name('admin.logout');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'RegisterController@register')->name('admin.register');

    Route::group(["prefix" => "password"], function () {
      // url: /password/...
        Route::get('/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::get('/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
        Route::post('/reset', 'ResetPasswordController@reset')->name('admin.password.update');
        Route::post('email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    });
});

# Admin
Route::group(['prefix' => 'admin', "namespace" => "Admin"], function() {

	  Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(["prefix" => "profile"], function() {
        $name = "admin";
        Route::get('/{admin}', 'AdminController@show')->name("$name.show");
        Route::get('/{admin}/edit', 'AdminController@edit')->name("$name.edit");
        Route::post('/{admin}', 'AdminController@update')->name("$name.update");
    });

    # Design Routes
    Route::group(["prefix" => "designs"], function() {
        $name = "admin.design";
        Route::get('/', 'AdminDesignController@showOpen')->name("$name.open");
        Route::get('/progress', 'AdminDesignController@showInProgress')->name("$name.in_progress");
        Route::get('/finished', 'AdminDesignController@showFinished')->name("$name.finished");
    });

    # User Routes
    Route::get('users', 'AdminUserController@index')->name('admin.user.index');
    Route::get('users/banned', 'AdminUserController@banned')->name('admin.user.trashed');

    # User Management for Admin
    Route::group(['prefix' => 'users/{user}', "name" => ""], function() {
        $name = "admin.user";
        Route::get('/', 'AdminUserController@show')->name("$name.show");
        Route::get('/edit', 'AdminUserController@edit')->name("$name.edit");
        Route::post('/', 'AdminUserController@store')->name("$name.update");
        Route::delete('/', 'AdminUserController@delete')->name("$name.delete");
        Route::put('/', 'AdminUserController@restore')->name("$name.restore");
        Route::delete('/delete', 'AdminUserController@destroy')->name("$name.destroy");
    });


});
