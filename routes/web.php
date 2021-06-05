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
//     return view('welcome');
// });

Route::get('/', 'PagesController@data');
Route::get('/pasien0226', 'PagesController@pasien');
Route::get('/dokter0226', 'PagesController@dokter');
Route::get('/kamar0226', 'PagesController@kamar');

//kontroller1
Route::get('/', 'JoinController@index');

//kontroller2
Route::get('/pasien0226', 'PasienController@index');
Route::get('/tambahpasien0226', 'PasienController@create');
Route::post('/pasien0226', 'PasienController@store');
Route::get('/pasien/{pasien}', 'PasienController@edit');
Route::patch('/pasien/{pasien}', 'PasienController@update');


//kontroller3
Route::get('/dokter0226', 'DokterController@index');
Route::get('/tambahdokter0226', 'DokterController@create');
Route::post('/dokter0226', 'DokterController@store');
Route::get('/dokter/{dokter}', 'DokterController@edit');
Route::patch('/dokter/{dokter}', 'DokterController@update');

//kontroller4
Route::get('/kamar0226', 'KamarController@index');
Route::get('/tambahkamar0226', 'KamarController@create');
Route::post('/kamar0226', 'KamarController@store');
Route::get('/kamar/{kamar}', 'KamarController@edit');
Route::patch('/kamar/{kamar}', 'KamarController@update');






