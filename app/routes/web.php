<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TaskController::class,'index'])->name('welcome');
Route::post('/', [TaskController::class,'store'])->name('store');
Route::delete('/{task}', [TaskController::class,'destroy'])->name('task.delete');