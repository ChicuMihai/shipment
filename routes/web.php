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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/pages','PageController@index');
Route::get('/pages/create','PageController@create');
Route::post('/pages','PageController@store');
Route::get('/pages/{page}','PageController@show');
Route::get('/pages/delete/{page}','PageController@delete');
Route::get('/pages/edit/{page}','PageController@edit');
Route::patch('/pages/{page}','PageController@update');

