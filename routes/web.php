<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('attendances', [App\Http\Controllers\AttendanceController::class, 'index'])->name('attendances.index');
// Route::get('attendances/create', [App\Http\Controllers\AttendanceController::class, 'create'])->name('attendances.create');
// Route::post('attendances', [App\Http\Controllers\AttendanceController::class, 'store'])->name('attendances.store');
// Route::get('attendances/{attendance}', [App\Http\Controllers\AttendanceController::class, 'show'])->name('attendances.show');
Route::get('attendances/{attendance}/edit', [App\Http\Controllers\AttendanceController::class, 'edit'])->name('attendances.edit');
Route::put('attendances/{attendance}', [App\Http\Controllers\AttendanceController::class, 'update'])->name('attendances.update');
// Route::delete('attendances/{attendance}', [App\Http\Controllers\AttendanceController::class, 'destroy'])->name('attendances.destroy');


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');




