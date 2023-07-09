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
Route::get('/jemaat', 'GerejaController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jemaat/create', 'GerejaController@create'); 
Route::post('/jemaat', 'GerejaController@store');
Route::get('jemaat/{id}/edit', 'GerejaController@edit'); 
Route::patch('jemaat/{id}', 'GerejaController@update');
Route::delete('jemaat/{id}', 'GerejaController@destroy');
Route::get('jemaat/search', 'GerejaController@search')->name('search'); 
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();