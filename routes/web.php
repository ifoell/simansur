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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/', ['as' => 'dashboard', 'uses' => 'Admin_GL@index']);

Route::get('/gl/daftar_surat', ['as' => 'daftar_surat', 'uses' => 'Admin_GL@daftar_surat']);

Route::get('/gl/form_surat', ['as' => 'form_surat', 'uses' => 'Admin_GL@form_surat']);

/*Route::group(['prefix' => 'gl'], function(){
	Route::resource('daftar_surat', 'SuratController');
});*/

Route::get('/gl/daftar_karyawan', ['as' => 'daftar_karyawan', 'uses' => 'Admin_GL@daftar_karyawan']);

Route::get('/gl/form_karyawan', ['as' => 'form_karyawan', 'uses' => 'Admin_GL@form_karyawan']);

Route::post('/gl/form_karyawan', 'Admin_GL@save_karyawan');

Route::get('/gl/{karyawan}/edit_karyawan', 'Admin_GL@edit_karyawan')->name('admin.edit_karyawan');

Route::post('/gl/{karyawan}/edit_karyawan', 'Admin_GL@update_karyawan');

Route::post('/gl/{karyawan}/delete_karyawan', 'Admin_GL@delete_karyawan')->name('admin.delete_karyawan');

Route::get('/gl/daftar_surat_masuk', ['as' => 'daftar_surat_masuk', 'uses' => 'SuratMasukController@daftar_surat_masuk']);

/*Route::group(['prefix' => 'admin'], function() {
    Route::resource('karyawan', 'KaryawanController');
    Route::get('/daftar_surat', ['as' => 'daftar_surat', 'uses' => 'Admin_GL@daftar_surat']);
});*/

Route::get('/gl/daftar_client', 'ClientController@daftar_client')->name('daftar_client');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('karyawan', 'KaryawanController');
});

Route::get('/gl/form_surat', 'SuratController@create')->name('form_surat');

Route::get('/gl/form_client','ClientController@form_client')->name('form_client');

Route::post('/gl/form_client', 'ClientController@save_client');

Route::get('/gl/{client}/edit_client', 'ClientController@edit_client')->name('admin.edit_client');

Route::post('/gl/{client}/edit_client', 'ClientController@update_client');

Route::post('/gl/{client}/delete_client', 'ClientController@delete_client')->name('admin.delete_client');

Route::post('/gl/{surat_masuk}/delete_surat_masuk', 'SuratMasukController@delete_surat_masuk')->name('admin.delete_surat_masuk');

Route::get('/gl/form_surat_masuk', 'SuratMasukController@form_surat_masuk');

Route::post('/gl/form_surat_masuk', 'SuratMasukController@save_surat_masuk');

Route::get('/gl/show_surat_masuk', 'SuratMasukController@show_surat_masuk');
