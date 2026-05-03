<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']);      // Tampil
    Route::post('/tasks', [TaskController::class, 'store']);     // Tambah
    Route::put('/tasks/{task}', [TaskController::class, 'update']); // Ubah
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy']); // Hapus
});