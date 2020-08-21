<?php

use Illuminate\Support\Facades\Route;

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

//all post
Route::get('/post', 'PostController@index');

//create post
Route::get('/getform','PostController@getform')->middleware('auth');
Route::post('/getdata','PostController@getdata');

//MY post
Route::get('/MYpost', 'PostController@mypost')->middleware('auth');

Route::get('/edit', 'PostController@edit')->name('edit');

//to define route of this all PostController CRUD operation
Route::resource('post', 'PostController');

