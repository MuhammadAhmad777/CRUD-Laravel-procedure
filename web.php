<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'index'])->name('index');
Route::post('/delete', [StudentController::class, 'delete'])->name('delete');
Route::get('/insert', [StudentController::class, 'create'])->name('create');
Route::post('/store', [StudentController::class, 'store'])->name('store');
