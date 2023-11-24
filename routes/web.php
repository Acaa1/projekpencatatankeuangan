<?php

use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\PiutangController;
use App\Http\Controllers\RencanaBudgetController;
use App\Http\Controllers\DanaDaruratController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PencatatKeuanganController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('master');
    });

Route::get('/', function () {
  return view('loyouts.welcome');
});
    
    Route::controller(AuthController::class)->group(function() {
        // register form
        Route::get('/register', 'register')->name('auth.register');
        // store register
        Route::post('/store', 'store')->name('auth.store');
        // login form
        Route::get('/login', 'login')->name('auth.login');
        // auth proses
        Route::post('/auth', 'auth')->name('auth.authentication');
        // logout
        Route::post('/logout', 'logout')->name('auth.logout');
        // dashboard page
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
    

Route::resource('/Pemasukan', PemasukanController::class);
Route::resource('/Pengeluaran', PengeluaranController::class);
Route::resource('/Hutang', HutangController::class);
Route::resource('/Piutang', piutangController::class);
Route::resource('/RencanaBudget', RencanaBudgetController::class);
Route::resource('/DanaDarurat', DanaDaruratController::class);
Route::resource('/Laporan', LaporanController::class);


