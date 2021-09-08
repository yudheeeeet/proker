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

Auth::routes();

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/', 'UserController@index')->name('index');


Route::group(['middleware' => 'auth'], function (){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'AdminController@admin')->name('admin');
    Route::get('/alamatbaru', 'AdminController@alamatbaru')->name('alamatbaru');
    Route::post('/tambah-data-alamat', 'AdminController@tambah_data_alamat');
    Route::get('/detailAlamat/{id}', 'AdminController@detail_alamat');
    Route::post('/tambah-anggota/{id}', 'AdminController@tambah_anggota');
});
