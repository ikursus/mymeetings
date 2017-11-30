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
Route::get('dashboard', 'DashboardController@index');

// Papar senarai users
Route::get('users', 'UsersController@paparsenarai');
// Papar borang tambah user
Route::get('users/add', 'UsersController@borangTambahUser');
// Terima data dari borang tambah user menerusi HTTP POST
Route::post('users/add', 'UsersController@simpanDataUser');
// Papar borang edit user
Route::get('users/{id}', 'UsersController@borangEditUser');
// Terima data dari borang edit user menerusi HTTP POST dan PATCH
Route::patch('users/{id}', 'UsersController@updateDataUser');
// Untuk delete user
Route::delete('users/{id}', 'UsersController@deleteUser');

// Papar senarai meeting
Route::get('meetings', 'MeetingsController@paparsenarai');
// Papar borang tambah meeting
Route::get('meetings/add', 'MeetingsController@borangTambahMeeting');
// Terima data dari borang tambah meeting menerusi HTTP POST
Route::post('meetings/add', 'MeetingsController@simpanDataMeeting');


// Papar senarai jabatan
Route::get('jabatan', 'JabatanController@index');
// Papar borang tambah jabatan
Route::get('jabatan/add', 'JabatanController@create');
// Terima data dari borang tambah jabatan menerusi HTTP POST
Route::post('jabatan/add', 'JabatanController@store');
