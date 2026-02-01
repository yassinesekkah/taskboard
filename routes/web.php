<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')
    ->middleware('auth');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks')
    ->middleware('auth');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store')
    ->middleware('auth');

Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit')
    ->middleware('auth');

Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update')
    ->middleware('auth');

Route::put('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus')
    ->middleware('auth');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy')
    ->middleware('auth');

Route::get('/backlog', [TaskController::class, 'indexBacklog'])->name('backlog.index')
    ->middleware('auth');