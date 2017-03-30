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

Route::get('api/todo', ['uses' => 'TodoController@index','middleware'=>'simpleauth']);
Route::post('api/todo', ['uses' => 'TodoController@store','middleware'=>'simpleauth']);

Auth::routes();

Route::get('/home', 'HomeController@index');
