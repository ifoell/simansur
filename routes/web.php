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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/gl', ['as' => 'dashboard', 'uses' => 'Admin_GL@index']);

Route::get('/gl/tulis_surat', ['as' => 'tulis_surat', 'uses' => 'Admin_GL@tulis_surat']);

Route::get('/gl/daftar_surat', ['as' => 'daftar_surat', 'uses' => 'Admin_GL@daftar_surat']);

Route::get('/gl/daftar_direksi', ['as' => 'daftar_direksi', 'uses' => 'Admin_GL@daftar_direksi']);

Route::get('/gl/daftar_client', ['as' => 'daftar_client', 'uses' => 'Admin_GL@daftar_client']);

Route::get('/gl/daftar_surat_masuk', ['as' => 'daftar_surat_masuk', 'uses' => 'Admin_GL@daftar_surat_masuk']);