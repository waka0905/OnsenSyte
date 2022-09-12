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
Route::get('/sytes', 'SyteController@index');
Route::get('/', 'SyteController@index');
Route::post('/sytes/store', 'SyteController@store');
Route::get('/sytes/area', 'SyteController@area');
Route::get('/sytes/direction', 'SyteController@direction');
Route::get('/sytes/rank', 'SyteController@rank');
Route::get('/sytes/genre', 'SyteController@genre');
Route::get('/sytes/result', 'SyteController@result');
Route::get('/sytes/terms', 'SyteController@terms');
Route::get('/sytes/{syte}', 'SyteController@show');
Route::get('/upload', 'ImageController@upload');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
