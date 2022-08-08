<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\AbsensiUserController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AbsenPegawaiController;

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        $active = 'home';
        return view('admin.index', compact('active'));
    });
    Route::resource('absensi', AbsensiController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('dasbor', DasborController::class);
    Route::resource('jabatan', JabatanController::class);

   
    

    $active = 'home';
    return view('user.index', compact('active'));
   


});
Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member']], function () {
    Route::get('/', function () {
        return view('home');
    });

  

    Route::get('absenpegawai', [AbsenPegawaiController::class, 'index'])->name('absenpegawai');
    Route::post('absenmasuk', [AbsenPegawaiController::class, 'store'])->name('absenmasuk');
    Route::get('absen-pegawai', [AbsenPegawaiController::class, 'indexkeluar'])->name('absen-pegawai');
    Route::post('absenkeluar', [AbsenPegawaiController::class, 'absenkeluar'])->name('absenkeluar');
   
});



Route::resource('absen', AbsenController::class,);
Route::get('/absensi', [AbsensiController::class, 'create']);
Route::get('/data_laporan', [AbsenController::class, 'index']);
Route::get('/laporan', [AbsensiController::class, 'index']);
