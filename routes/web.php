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

Route::get('/gl/daftar_surat', ['as' => 'daftar_surat', 'uses' => 'Admin_GL@daftar_surat']);

Route::get('/gl/daftar_direksi', ['as' => 'daftar_direksi', 'uses' => 'Admin_GL@daftar_direksi']);

Route::get('/gl/daftar_client', ['as' => 'daftar_client', 'uses' => 'Admin_GL@daftar_client']);

Route::get('/gl/daftar_surat_masuk', ['as' => 'daftar_surat_masuk', 'uses' => 'Admin_GL@daftar_surat_masuk']);

Route::group(['prefix' => 'admin'], function() {
    Route::resource('karyawan', 'KaryawanController');
});

Route::get('/gl/form_surat', ['as' => 'form_surat', 'uses' => 'Admin_GL@form_surat']);

Route::get('/gl/form_client', ['as' => 'form_client', 'uses' => 'Admin_GL@form_client']);

Route::post('/gl/form_client', 'Admin_GL@save_client');

Route::get('/gl/{client}/edit_client', 'Admin_GL@edit_client')->name('admin.edit_client');

Route::post('/gl/{client}/edit_client', 'Admin_GL@update_client');

Route::post('/gl/{client}/delete_client', 'Admin_GL@delete_client')->name('admin.delete_client');

// belum dipake
Route::post('/gl/form_surat', 'Admin_GL@save_surat'); 


Route::get('/gl/form_surat_masuk', 'SuratMasukController@form_surat_masuk');

Route::post('/gl/form_surat_masuk', 'SuratMasukController@save_surat_masuk');
