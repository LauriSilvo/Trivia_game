<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

Route::get('/peli', [TeacherController::class, 'index']);

Route::get('/opettajat/{teacher}/kategoriat', function ($teacher){
    return Category::where('teacher_id', $teacher)
    
    ->get(['teacher_id', 'name']);
});


Route::get('/question', [QuestionController::class, 'index']);

Route::get('/dashboard', [QuestionController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/etusivu', function () {
    return view('etusivu');
});
Route::get('/kirjaudu', function () {
    return view('kirjaudu');
});
Route::get('/question', function () {
    return view('question');
});




Route::get('/dashboard', [CategoryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
