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

//Product routes
Route::get('products', 'ProductController@index');
Route::get('product/create','ProductController@create');
Route::post('products' ,'ProductController@store');
Route::get('product/{id}/edit' ,'ProductController@edit');
Route::put('product/{id}', 'ProductController@update');
Route::delete('product/{id}', 'ProductController@destroy');

//Provider routes
Route::get('providers', 'providerController@index');
Route::get('provider/create','providerController@create');
Route::post('providers' ,'providerController@store');
Route::get('provider/{id}/edit' ,'providerController@edit');
Route::put('provider/{id}', 'providerController@update');
Route::delete('provider/{id}', 'providerController@destroy');
