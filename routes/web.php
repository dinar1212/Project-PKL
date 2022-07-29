<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DataController;
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
    return view('welcome');
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
    Route::resource('data', DataController::class);
});