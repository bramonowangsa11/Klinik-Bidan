<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ImunisasiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {
        return view('layouts.login');
    });
    // routes tes dashboar admin
    // Route::get('/dashboard-admin', function () {
    //     return view('layouts.admin.dashboard-admin');
    // });
    Route::get('/daftar', function () {
        return view('layouts.daftar');
    });
    Route::post('/daftar', [PasienController::class, 'store'])->name('daftar.store'); 
    Route::post('/login',[SessionController::class,'login']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/pasien',[PasienController::class,'index'])->middleware('userAkses:pasien');
    Route::get('/admin',[ImunisasiController::class,'index'])->middleware('userAkses:admin');
    Route::get('/input-table',[ImunisasiController::class,'inputImunisasi'])->middleware('userAkses:admin');
    Route::post('/input-table',[ImunisasiController::class,'store'])->middleware('userAkses:admin');
    Route::get('/imunisasi/{id}', [ImunisasiController::class,'showid'])->name('imunisasi.show')->middleware('userAkses:admin');
    Route::delete('/imunisasi/{id}', [ImunisasiController::class,'destroy'])->name('imunisasi.destroy')->middleware('userAkses:admin');
    Route::put('/imunisasi/{id}', [ImunisasiController::class,'update'])->name('imunisasi.update')->middleware('userAkses:admin');
    Route::get('/logout',[SessionController::class,'logout']);
});

// routes dashboard admin
Route::get('/dashboard-admin', function () {
    return view('layouts.admin.dashboard-admin');
});
Route::get('/table-imunisasi2', function () {
    return view('layouts.admin.table-imunisasi2');
});
Route::get('/table-imunisasi', function () {
    return view('layouts.admin.table-imunisasi');
});
Route::get('/detail-table', function () {
    return view('layouts.admin.detail-table-imunisasi');
});
Route::get('/test', function () {
    return view('layouts.admin.test-modal');
});





