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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function(){
    return "<h2> Hello-World </h2>";
});

Route::get('/anjay', function () {
    return view('anjay');
});

Route::get('/anggota', function () {
    return view('anggota/index');
});

Route::get('/anggota', function () {
    return view('anggota/search');
});*/

//Route::resource('/tescontrol','TesController');
Route::resource('anggota',AnggotaController::class);