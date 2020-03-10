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

Route::prefix('/test')->group(function(){
    Route::get('redis1','TestController@redis1');
    Route::get('redis2','TestController@redis2');
    Route::get('mysql1','TestController@mysql1');
});
