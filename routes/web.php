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

Route::get('/', 'ViewController@home');
Route::get('/mainRoom', 'ViewController@mainRoom');
Route::get('/serverRoom', 'ViewController@serverRoom');
Route::get('/networkRoom', 'ViewController@networkRoom');
Route::get('/backupRoom', 'ViewController@backupRoom');
Route::get('/controlRoom', 'ViewController@controlRoom');
Route::get('/airControlRoom', 'ViewController@airControlRoom');
Route::get('/upsRoom', 'ViewController@upsRoom');
Route::get('/fm200', 'ViewController@fm200');
Route::get('/surgeProtection', 'ViewController@surgeProtection');
Route::get('/electricSystem', 'ViewController@electricSystem');
Route::get('/ping/{ip}','ViewController@pingToClient');
Auth::routes();

Route::get('/home', 'HomeController@index');
