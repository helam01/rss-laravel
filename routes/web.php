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

Route::get('login', 'Auth\LoginController@getLogin')->name('getLogin');
Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');

Route::get('cadastro', 'Auth\RegisterController@getRegistration')->name('getRegistration');
Route::post('cadastro', 'Auth\RegisterController@postRegistration')->name('postRegistration');


Route::group(['middleware' => 'auth'], function () {
	Route::get('logout', 'Auth\LoginController@getLogout')->name('getLogout');
	Route::get('/', 'HomeController@getIndex')->name('getIndex');
	Route::get('home', 'HomeController@getIndex')->name('getIndex');
});
