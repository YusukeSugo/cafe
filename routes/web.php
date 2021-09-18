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
    
Route::get('/', 'CafeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/cafes/entry', 'CafeController@entry')->name("cafe.entry");
    Route::post('/cafes', 'CafeController@store');
});

Route::get('/cafes/{cafe}', 'CafeController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cafes/{cafe}/map', 'CafeController@map');

Route::post('/cafes/{cafe}/comments', 'CommentController@store');