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


# Auth
Auth::routes();

# Client
Route::get('/', 'ClientController@index')->name('homepage');
Route::post('/design', 'ClientController@store')->name('design.store');
Route::get('/{design}', 'ClientController@show')->name('client.design.show');

# Designer
Route::group(['middleware' => ['auth'], 'namespace' => 'Designer'], function () {

	Route::get('/designer/dashboard', 'DashboardController@dashboard')->name('dashboard');
	Route::name('profile.')->group(function () {
		Route::get('/designer/profile', 'ProfileController@show')->name('show');
		Route::get('/profile/edit', 'ProfileController@edit')->name('edit');
		Route::match(['post', 'put', 'patch'], '/profile', 'ProfileController@update')->name('update');
	});
	Route::name('design.')->group(function () {
		Route::get('/designer/design', 'DesignController@index')->name('index');
		Route::get('/designer/design/{design}', 'DesignController@show')->name('show')->middleware('web');
		Route::match(['post', 'put', 'patch'], '/design/{design}/take', 'DesignController@updateTake')->name('take');
		Route::match(['post', 'put', 'patch'], '/design/{design}/drop', 'DesignController@updateDrop')->name('drop');
		Route::match(['post', 'put', 'patch'], '/design/{design}/finish', 'DesignController@updateFinish')->name('finish');
		Route::match(['post', 'put', 'patch'], '/design/{design}/fail', 'DesignController@updateFail')->name('fail');
		Route::get('/design/{design}/download', 'DesignController@downloadImage')->name('download');
	});
});

# Manager
Route::group(['middleware' => ['auth', 'manager'], 'namespace' => 'Manager', 
	'prefix' => 'manager'], function () {
	Route::name('manager.')->group(function () {
		Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

	});

	Route::name('manager.designer.')->group(function () {
		Route::get('/designer', 'DesignerController@index')->name('index');
		Route::patch('/designer/{designer}/promote', 'DesignerController@promoteAsManager')->name('promote');
		Route::match(['put', 'patch'], '/designer/{designer}/ban', 'DesignerController@ban')->name('ban');
		Route::match(['put', 'patch'], '/designer/{id}/restore', 'DesignerController@restore')->name('restore');
		Route::delete('/designer/{id}', 'DesignerController@destroy')->name('destroy');
	});
	Route::name('manager.profile.')->group(function () {
		Route::get('/profile/{designer}', 'ProfileController@showActive')->name('show');
		Route::get('/profile/{id}/banned', 'ProfileController@showBanned')->name('show.banned');
		Route::get('/profile/{designer}/edit', 'ProfileController@edit')->name('edit');
		Route::match(['post', 'put', 'patch'], '/profile/{designer}', 'ProfileController@update')->name('update');
	});
	Route::name('manager.design.')->group(function () {
		Route::get('/design', 'DesignController@index')->name('index');
		Route::match(['post', 'put', 'patch'], '/design/{design}/fail', 'DesignController@updateFail')->name('fail');


		Route::get('/design/detail/{id}', 'DesignController@detailOrder')->name('detailorder');
	});
});
