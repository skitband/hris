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
   Route::get('/dashboard', 'Auth\AdminLoginController@index')->name('admin.dashboard');
   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/', 'AdminController@index')->name('admin.dashboard');
   // Route::get('/settings', 'Admin\EmployeeController@settings')->name('admin.settings');
   Route::get('/getEmployees', 'Admin\EmployeeController@getEmployees')->name('getEmployees');
   Route::put('/store_photo/{employee}', 'Admin\EmployeeController@store_photo')->name('employee.store_photo');
   //Route::get('/employee/count', 'Admin\EmployeeController@count_users')->name('count');
   Route::get('/employee/deletefile/{employee}/{file}', 'Admin\EmployeeController@destroy_file')->name('employee.deletefile');
   Route::put('/employee/resetpw/{employee}', 'Admin\EmployeeController@resetpw')->name('employee.resetpw');
   Route::put('/employee/deactivate/{employee}', 'Admin\EmployeeController@deactivate')->name('employee.deactivate');
});

Route::resource('admin/employee','Admin\EmployeeController');

Route::group(['prefix' => 'admin'], function() {
   Route::get('/', 'Admin\SettingsController@index')->name('settings.index');
   Route::get('/settings', 'Admin\SettingsController@settings')->name('settings.index');
   Route::get('/settings/leads', 'Admin\SettingsController@leads');
});


//Route::resource('employee','Admin\EmployeeController');






