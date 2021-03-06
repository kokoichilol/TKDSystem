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

// Route::get('/', function () {
//     return view('pages/top');
// });

// Route::get('/', 'TopController@init');

Route::get('/', 'LoginController@init');
Route::post('/', 'LoginController@proceed');

Route::get('/top', 'TopController@init');
