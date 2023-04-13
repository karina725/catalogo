<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('welcome');
});

Route::get('/greeting',function(){
    return 'Hello World';
});

Route::get('/movies','App\Http\Controllers\MovieController@index');
Route::get('/movies/create','App\Http\Controllers\MovieController@create');
Route::post('/movies/store','App\Http\Controllers\MovieController@store');
Route::get('/movies/show/{id}','App\Http\Controllers\MovieController@show');
Route::get('/movies/edit/{id}','App\Http\Controllers\MovieController@edit');
Route::post('/movies/update/{id}','App\Http\Controllers\MovieController@update');
Route::get('/movies/delete/{id}','App\Http\Controllers\MovieController@delete');
