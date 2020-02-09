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

Route::post('/test/reg','TestController@reg');
Route::post('/test/login','TestController@login');
Route::get('/test/info','TestController@info');

Route::post('/test/auth','TestController@auth');


//签名
Route::get('/test/checksign','TestController@md5test');
//post签名
Route::post('/test/checksign2','TestController@md5test2');

Route::get('/test/rsa1','TestController@rsa1');

//对称解密
Route::get('/test/decrypt1','TestController@decrypt');

//非对称解密
Route::get('/test/rsa2','TestController@rsa2');



