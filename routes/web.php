<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SessionController;

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
    Route::get('/daftar', function () {
        return view('layouts.daftar');
    });
    Route::post('/daftar', [PasienController::class, 'store'])->name('daftar.store'); 
    Route::post('/login',[SessionController::class,'login']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/pasien',[PasienController::class,'index'])->middleware('userAkses:pasien');
    Route::get('/admin',[AdminController::class,'index'])->middleware('userAkses:admin');
    Route::get('/logout',[SessionController::class,'logout']);
});



