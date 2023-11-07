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
