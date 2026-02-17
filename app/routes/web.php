<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TaskController::class,'index'])->name('index');
Route::post('/', [TaskController::class,''])->name('store');
