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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student','studentController');
Route::get('/index','studentController@index')->name('index');
Route::resource('comment','CommentController');
Route::get('/showcomment/{id}','CommentController@showcomment')->name('showcomment');
Route::get('/showformcomment/{id}','CommentController@showformcomment')->name('showformcomment');

Route::PUT('/storecomment/{id}','CommentController@storecomment')->name('storecomment');