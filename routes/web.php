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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('hitungLingkaran', 'App\Http\Controllers\DosenController@hitungLingkaran');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('linktree', function () {
    return view('bsm');
});

Route::get('testing1', function () {
    return view('coba1');
});

Route::get('media', function () {
    return view('coba2');
});

Route::get('jenis-teks', function () {
    return view('coba3');
});

Route::get('company-name', function () {
    return view('company');
});

Route::get('bootstrap', function () {
    return view('responsive');
});

Route::get('peringatan', function () {
    return view('alert');
});

Route::get('kalkulator', function () {
    return view('operasi');
});

Route::get('contact-form', function () {
    return view('validasi');
});

Route::get('blog', function () {
    return view('blog');
});

