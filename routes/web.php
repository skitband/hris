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

//Route::get('/', function () { return view('login'); });

Route::get('/', 'HomeController@index')->name('index');

// Route::get('register/', 'welcomeController@register')->name('register');

// Route::post('store/', 'welcomeController@store')->name('store');

// Route::post('login/', 'welcomeController@login')->name('login');
Auth::routes();
// ADMIN
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function() {
   //Route::get('/home', 'AdminController@home')->name('admin.home');
   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/', 'AdminController@index')->name('admin.dashboard');

   
});

Route::resource('admin/employee','Admin\EmployeeController');

//Route::resource('employee','Admin\EmployeeController');






