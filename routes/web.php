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

Route::get("login", "Auth\LoginController@showLoginForm");
Route::post("login", "Auth\LoginController@login")->name("login");


//logout
Route::post("logout", "Auth\LoginController@logout")->name("logout");

Route::get('/', function(){
    return view('layouts.admin');
});

// Route::get('pdf', 'startController@pdf');

Route::get('siswa/export/', 'startController@export');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
