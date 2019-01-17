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
//     return '<h1 style="color:coral;">hello world</h1>';
// });
Route::get('/', 'UserController@traLaiViewWelcome');
Route::get('/dangnhap', 'UserController@traLaiViewWelcome');
Route::get('/form-create-new-user', 'UserController@create');







Route::get('/nam', function () {
    return 'Hello nam';
});
Route::get('/login', function () {
    return '<h1h1></h1h1>';
});
Route::get('/abc/def', function () {
    return view('thu-muc.def');
});