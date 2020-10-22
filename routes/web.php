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

Route::get('/report', 'App\Http\Controllers\apiitsupportController@report');

Route::get('/status', 'App\Http\Controllers\apiitsupportController@index');

Route::get('/change_status', function () {
    return view('change_status');
});

Route::get('/edit_status', 'App\Http\Controllers\apiitsupportController@unit');

Route::get('/process_status/{accept_id}', function ($accept_id) {
   return view('process')->with(['accept_id' => $accept_id]);
   
});

// Route::get('/process_status', function () {
//     return view('process');
// });
// Route::get('/detail', 'App\Http\Controllers\apiitsupportController@detail');
Route::get('/detail/{accept_id}', 'App\Http\Controllers\apiitsupportController@detail');

Route::get('/success', function () {
    return view('success');
});

// Route::get('/form', function () {//ชื่อ route
//     return view('form')->with(['units'=>'ink']);
// });
Route::get('/form', 'App\Http\Controllers\apiitsupportController@unit');

Route::post('/form', 'App\Http\Controllers\apiitsupportController@store');
Route::post('/process_status', 'App\Http\Controllers\detail_accept_api_Controller@store');
Route::get('/export', 'App\Http\Controllers\apiitsupportController@export');

