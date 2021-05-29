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

Route::prefix('guest')->group(function () {
    Route::get('/', 'FrontController@index');
    Route::get('/02', 'FrontController@index2');
    Route::get('/03', 'FrontController@index3');
    Route::get('/04', 'FrontController@index4');
    Route::get('/05', 'FrontController@index5');
    Route::get('/06', 'FrontController@index6');
    Route::get('/07', 'FrontController@index7');
    Route::get('/08', 'FrontController@index8');
    Route::get('/09', 'FrontController@index9');
    Route::get('/10', 'FrontController@index10');
    Route::get('/11', 'FrontController@index11');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
