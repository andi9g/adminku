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

// Route::get('/', function () {
//     return view('layout.app');
// });
// Route::get('/dashboard', function () {
//     $judul = "Dashboard";
//     return view('dashboard', compact('judul'));
// });
// Route::get('/kontak', function () {
//     $judul = "Kontak";
//     return view('kontak',compact('judul'));
// });

// Route::get('/jadwal', function () {
//     $judul = "Jadwal";
//     return view('jadwal',compact('judul'));
// });
// Route::get('/siswa', function () {
//     $judul = "Siswa";
//     return view('siswa',compact('judul'));
// });
// Route::get('/guru', function () {
//     $judul = "Guru";
//     return view('guru',compact('judul'));
// });

// Route::get('pdf', 'startController@pdf');

Route::get('siswa/export/', 'startController@export');
