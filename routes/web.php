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
    return view('login');
});

Route::get('/home', function () {//ชื่อ route
    return view('homepage');
});

Route::get('/report', function () {//ชื่อ route
    return view('report');
});

Route::get('/form', function () {//ชื่อ route
    return view('form');
});
//Route::post('/form','apitestController@index');
Route::post('/form', 'App\Http\Controllers\apiitsupportController@store');