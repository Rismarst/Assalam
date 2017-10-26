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

Route::get('/', 'FrontendController@nama_yayasan');

Route::get('/profile', function () {
    return view('frontend/profile');
});

Route::get('/pendidikan', 'FrontendController@unit_pendidikan');



Route::get('/contact', function () {
    return view('frontend/contact');
});

Route::get('/sejarah', 'FrontendController@sejarah');

Route::get('/visimisi', 'FrontendController@visimisi');

Route::get('/moto', 'FrontendController@moto');

Route::get('/tujuan', 'FrontendController@tujuan');
Route::get('/galeri', 'FrontendController@galeri');



Route::get('/sosag', function () {
    return view('frontend/sosag');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('yayasan', 'YayasanController');
Route::resource('profil', 'profilController');
Route::resource('unitpendidikan', 'UnitPendidikanController');
Route::resource('berita', 'beritaController');