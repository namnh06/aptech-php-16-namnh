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
/** ROUTE RESOURCE */
// Route::resource('users', 'UserController');

Route::get('users/create', 'UserController@create');
Route::post('users/dang-ky', 'UserController@store')->name('users.store');
Route::get('users/index', 'UserController@index')->name('users.index');
Route::get('users/{id}', 'UserController@edit');
Route::put('users/update', 'UserController@update');