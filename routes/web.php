<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\GuestController;
use App\Models\Transaksi;



Route::get('/', [GuestController::class, 'index']);
Route::get('/user/index', [HomeController::class, 'index'])->name('user.index');

Route::middleware(['auth', 'user-access:user'])->group(function () {
    // Route::get('/', [HomeController::class, 'index']);
    Route::get('/user/{admin}/show', [HomeController::class, 'show'])->name('user.show');
    Route::get('/user/transaksi/', [TransaksiController::class, 'create']);
    Route::post('/user/transaksi/', [TransaksiController::class, 'store']);
    Route::get('/user/indextransaksi', [TransaksiController::class, 'index']);
});


Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create']);
    Route::post('/admin/create', [AdminController::class, 'store']);
    Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name(name: 'admin.edit');
    Route::patch('/admin/{admin}', [AdminController::class, 'update'])->name(name: 'admin.update');
    Route::delete('/admin/{admin}', [AdminController::class, 'destroy'])->name(name: 'admin.delete');
    Route::get('/admin/{admin}/show', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/admin/transaksi/', [TransaksiController::class, 'create']);
    Route::post('/admin/transaksi/', [TransaksiController::class, 'store']);
    Route::get('/admin/indextransaksi', [TransaksiController::class, 'index']);
    Route::post('/admin/{admin}/transaksi', [TransaksiController::class, 'update']);
});

Auth::routes();
