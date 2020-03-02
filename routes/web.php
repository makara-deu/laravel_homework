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
Route::get('add_profile', 'UserController@add_profile');
Route::get('showuser', 'UserController@showuser');
Route::get('edituser/{id}', 'UserController@edituser')->name('edituser');
Route::put('updateuser/{id}', 'UserController@updateuser')->name('updateuser');
Route::get('deleteuser/{id}', 'UserController@deleteuser')->name('deleteuser');
Route::resource('posts','PostsController');


