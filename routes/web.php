<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarProgramController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LibPersatuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/pimpinan', [GuestController::class, 'pimpinan'])->name('home');

Route::get('/daftar-ahli', [RegisterController::class, 'M_Ahli']);
Route::post('/daftar-ahli', [RegisterController::class, 'store'])->name('daftar.perform');
Route::get('/akaun', [RegisterController::class, 'M_Akaun'])->name('info-akaun');
Route::post('/akaun', [RegisterController::class, 'M_akaun_perform'])->name('info-akaun.perform');
Route::get('/otp', [RegisterController::class, 'otp'])->name('otp');
Route::post('/otp', [RegisterController::class, 'verify'])->name('otp.perform');
Route::post('/resend-otp', [RegisterController::class, 'resend'])->name('otp.resend');


Route::get('/admin/login', [AdminController::class, 'login'])->name('login.admin');
Route::post('/admin/login', [AdminController::class, 'log_perform'])->name('login.admin.perform');

Route::get('/program/{slug}', [DaftarProgramController::class, 'index'])->name('guest.view.program');
Route::get('/program/daftar/{id}/{slug}', [DaftarProgramController::class, 'create'])->name('guest.daftar.program');
Route::post('/program/daftar/{id}/{slug}', [DaftarProgramController::class, 'store'])->name('guest.daftar.program.perform');


Route::middleware(['auth:admin', 'admin:Pusat'])->group(function () {
    Route::get('/pusat/utama', [AdminController::class, 'indexPusat'])->name('indexAdmin');
    Route::get('/pusat/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::get('/pusat/program', [ProgramController::class, 'index'])->name('pusat.program.index');
    Route::get('/pusat/program/tambah', [ProgramController::class, 'create'])->name('pusat.program.tambah');
    Route::get('/pusat/program/kemaskini/{id}', [ProgramController::class, 'edit'])->name('pusat.program.kemaskini');
    
    Route::post('/pusat/program/tambah', [ProgramController::class, 'store'])->name('pusat.program.tambah.perform');
    Route::post('/pusat/program/kemaskini/{id}', [ProgramController::class, 'update'])->name('pusat.program.kemaskini.perform');

    Route::get('/admin/lib/persatuan', [LibPersatuanController::class, 'index'])->name('admin.libpersatuan.index');
    Route::get('/admin/lib/persatuan/tambah', [LibPersatuanController::class, 'tambah'])->name('admin.libpersatuan.tambah');
    Route::get('/admin/lib/persatuan/kemaskini/{id}', action: [LibPersatuanController::class, 'edit'])->name('admin.libpersatuan.kemaskini');
    
    Route::put('/admin/lib/persatuan/kemaskini/{id}', [LibPersatuanController::class, 'update'])->name('admin.libpersatuan.kemaskini.perform');
    Route::post('/admin/lib/persatuan/tambah', [LibPersatuanController::class, 'store'])->name('admin.libpersatuan.tambah.perform');
});


Route::middleware(['auth', 'admin:Cawangan'])->group(function () {
    Route::get('/cawangan/utama', [AdminController::class, 'indexCawangan'])->name('indexCawangan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
