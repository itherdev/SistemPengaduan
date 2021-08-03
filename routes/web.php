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


Route::get('/', function () {
    return view('index');
});

// Login
// Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm '])->name('login');
// Route::get ('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


/*------------------ Pengaduan --------------------------*/
//Pengaduan Berkas
Route::get('pengaduan', 'PengaduanController@index')->name('pengaduan');
Route::get('pengaduan/tambah', 'PengaduanController@create')->name('pengaduan.t');
Route::post('pengaduan', 'PengaduanController@store')->name('pengaduan.s');
Route::delete('pengaduan/{id}', 'PengaduanController@destroy')->name('pengaduan.d');
Route::get('pengaduan/{id}/edit', 'PengaduanController@edit')->name('pengaduan.e');
Route::patch('pengaduan/{id}', 'PengaduanController@update')->name('pengaduan.u');
Route::get('pengaduan/{id}/detail', 'PengaduanController@show')->name('pengaduan.v');
// Route::get('pengaduan/cari', 'PengaduanController@cari')->name('pengaduan.c');
// Route::get('pengaduan/cetak', 'PengaduanController@cetak')->name('pengaduan.ct');
//cetak
// Route::get('pengaduan/print', 'CetakpengaduanController@pdf')->name('pengaduan.p');
//cetak pertanggal
// Route::get('pengaduan/cetak-form', 'PengaduanController@cetakform')->name('pengaduan.cf');
// Route::get('pengaduan/cetak-pertanggal/{tglawal}/{tglakhir}', 'PengaduanController@cetakpertanggal')->name('pengaduan.cpt');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
