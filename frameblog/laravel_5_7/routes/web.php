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
Route::get('/', function () {//多次注册，以最后一个为准
    echo 444444;die;
});

Route::get('/hello', function () {
    exit("hello world");
});

Route::get('/hello2', 'Hello@hello2');

Route::get('/hello3', 'Hello@hello3');

