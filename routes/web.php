<?php

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

Route::get('/', 'mahasiswacontroller@index');
Route::get('mahasiswa-tambah','mahasiswacontroller@tambah');
Route::post('mahasiswa-save','mahasiswacontroller@save');
Route::get('mahasiswa-edit/{id}','mahasiswacontroller@edit');
Route::post('mahasiswa-update/{id}','mahasiswacontroller@update');
Route::get('mahasiswa-hapus/{id}', 'mahasiswacontroller@hapus');
Route::get('latihan','mahasiswacontroller@latihan');
//latihan
Route::get('/sample', 'samplecontroller@index');
