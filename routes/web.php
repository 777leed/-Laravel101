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
$ptc = 'App\Http\Controllers\PageController';
Route::get('/',$ptc.'@index');
Route::get('/home',$ptc.'@home');
Route::get('/library',$ptc.'@showLibrary');
