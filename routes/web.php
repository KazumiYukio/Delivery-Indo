<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMain;
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

//admin
route::group(['middleware' => 'auth'], function(){
route::get('/', [ControllerMain::class, 'rumah']);
Route::get('data_b', [ControllerMain::class, 'data_barang']);
Route::get('data_b/tambah', [ControllerMain::class, 'tambah_b']);
Route::post('data_b/tambah/processT', [ControllerMain::class, 'ProcessTambah_b']);
Route::get('data_b/edit/{id}', [ControllerMain::class, 'edit']);
Route::post('data_b/edit/ProcessE', [ControllerMain::class, 'ProcessEdit_b']);
Route::get('data_b/hapus/{id}', [ControllerMain::class, 'hapus_b']);
Route::get('data_b/search', [ControllerMain::class, 'search']);
});

//login
Route::get('Login', [ControllerMain::class, 'login'])->name('login');
Route::post('Login/checklogin', [ControllerMain::class ,'checklogin'])->name('check');

//pegawai
Route::group(['middleware' => 'auth'], function(){
Route::get('paketID', [ControllerMain::class, 'index'])->name('success');
Route::get('paketID/logout', [ControllerMain::class, 'logout'])->name('logout');
route::get('paketID/kirim/{id}', [ControllerMain::class, 'antar'])->name('antarkan');
route::post('paketID/kirim/Process', [ControllerMain::class, 'kirim'])->name('SiapKirim');
route::get('paketID/daftar_kirim', [ControllerMain::class, 'daftar'])->name('daftar_kirim');
Route::get('paketID/hapus/{id}', [ControllerMain::class, 'hapus_p']);
});

//pelanggan
route::get('pelangganID', [ControllerMain::class, 'pelanggan'])->name('PID');
route::get('pelangganID/hasil', [ControllerMain::class, 'hasil'])->name('cari_kd');
route::get('pelangganID/hasil/{id}', [ControllerMain::class, 'print'])->name('print');
