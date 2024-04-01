<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\studentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])-> name('home');

Route::prefix('/Student')->group (function(){
Route::get('/', [studentController::class, 'student'])-> name('student');
Route::post('/store', [studentController::class, 'store'])-> name('student.store');
Route::get('/{task_id}/delete', [studentController::class, 'delete'])-> name('student.delete');
Route::get('/{task_id}/edit', [studentController::class, 'edit'])-> name('student.');


});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
