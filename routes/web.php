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

//-------------------------------------------------------------------------------------------
//Route Eselon 4
Route::get('/eselon4', 'Eselon4Controller@ese4');
Route::get('/eselon4/tambahese4', 'Eselon4Controller@tambahese4');
Route::post('/eselon4/proses', 'Eselon4Controller@proses');
Route::get('/eselon4/hapus/{id}', 'Eselon4Controller@hapus');



//-------------------------------------------------------------------------------------------
//Route Staff
Route::get('/staf', 'StaffController@stt');
