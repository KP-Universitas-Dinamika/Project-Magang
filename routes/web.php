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

Route::get('/user/{id}', 'TestController@test');

//-----------------------------------------------------------------------------------------------------------
//Route Eselon4
Route::get('/eselon4', 'Eselon4Controller@index');
Route::get('/eselon4/tambah4', 'Eselon4Controller@tambah4');
Route::post('/eselon4/store4', 'Eselon4Controller@store4');
Route::get('/eselon4/edit4/{id}', 'Eselon4Controller@edit4');
Route::put('/eselon4/update4/{id}', 'Eselon4Controller@update4');
Route::get('/eselon4/hapus/{id}', 'Eselon4Controller@delete');
Route::get('/eselon4/progress4', 'Eselon4Controller@progress4');
Route::get('/eselon4/cari', 'Eselon4Controller@cari');
Route::get('/eselon4/todo4', 'Eselon4Controller@todo4');
Route::get('/eselon4/ambil4/{id}', 'Eselon4Controller@ambil4');
Route::put('/eselon4/proses4/{id}', 'Eselon4Controller@proses4');


//Soft Deletes


//-----------------------------------------------------------------------------------------------------------
//Route Staff
Route::get('/staf', 'StaffController@index');
Route::get('/staf/tambahs', 'StaffController@tambahs');
Route::post('/staf/stores', 'StaffController@stores');
Route::get('/staf/ambils/{id}', 'StaffController@ambils');
Route::put('/staf/progress', 'StaffController@progress');
Route::get('/staf/staf_progress', 'StaffController@staf_progress');
Route::get('/staf/hapus_tugas/{id}', 'StaffController@hapus_tugas');



//-----------------------------------------------------------------------------------------------------------
//Route Eselon3

Route::get('/eselon3', 'Eselon3Controller@index');
Route::get('/eselon3/tambah3', 'Eselon3Controller@tambah3');
Route::post('/eselon3/store3', 'Eselon3Controller@store3');
Route::get('/eselon3/edit3/{id}', 'Eselon3Controller@edit3');
Route::put('/eselon3/update3/{id}', 'Eselon3Controller@update3');
Route::get('/eselon3/hapus/{id}', 'Eselon3Controller@delete');
Route::get('/eselon3/cari', 'Eselon3Controller@cari');