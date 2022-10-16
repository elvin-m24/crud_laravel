<?php

use App\Models\Keberangkatan;
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
    return view('index');
});
Route::get('/keberangkatan', function () {
    return view('keberangkatan');
});

Route::get('/','App\Http\Controllers\LihatController@index');

Route::get('/keberangkatan','App\Http\Controllers\KeberangkatanController@index');
Route::get('/tambah','App\Http\Controllers\KeberangkatanController@create');
Route::post('/store','App\Http\Controllers\KeberangkatanController@store');
Route::get('/edit/{id}','App\Http\Controllers\KeberangkatanController@edit');
Route::post('/update','App\Http\Controllers\KeberangkatanController@update');
Route::get('/destroy/{id}','App\Http\Controllers\KeberangkatanController@destroy');