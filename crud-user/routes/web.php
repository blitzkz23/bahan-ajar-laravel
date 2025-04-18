<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PantiSosialController;
use App\Http\Controllers\PenerimaManfaatController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\PenerimaBantuanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProgramRehabilitasiController;
use Livewire\LivewireManager;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/api/test', [UserController::class, 'testApi']);


// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Tambahkan route untuk dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// Check livewire
Route::get('/livewire-components', function (LivewireManager $livewire) {
    return response()->json($livewire->getComponentAliases());
});

// Panti Sosial Routes
Route::resource('panti', PantiSosialController::class)->middleware('auth');
Route::resource('penerima-manfaat', PenerimaManfaatController::class)->middleware('auth');
Route::resource('bantuan', BantuanController::class)->middleware('auth');

// Route untuk CRUD Penerima Bantuan
Route::resource('penerima-bantuan', PenerimaBantuanController::class)->middleware('auth');

// Route untuk CRUD Laporan
Route::resource('laporan', LaporanController::class)->middleware('auth');

// Route untuk CRUD Program Rehabilitasi
Route::resource('program-rehabilitasi', ProgramRehabilitasiController::class)->middleware('auth');