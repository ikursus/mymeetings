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

Route::get('hubungi', function () {
    return view('borang/template_hubungi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Routes admin area
Route::get('dashboard', function () {
  return view('admin/template_dashboard');
});

// Papar senarai users
Route::get('users', 'UsersController@paparsenarai');
// Papar borang tambah user
Route::get('users/add', 'UsersController@borangTambahUser');
// Terima data dari borang tambah user menerusi HTTP POST
Route::post('users/add', 'UsersController@simpanDataUser');






Route::get('meetings', 'MeetingsController@paparsenarai');
