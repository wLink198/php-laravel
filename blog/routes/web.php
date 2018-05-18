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

Route::get('/update','DBController@update');
Route::get('/delete','DBController@delete');
Route::post('/insert','DBController@insert');
Route::get('/list','DBController@select');
Route::get('/link', function (){
    return view('layout');
});

