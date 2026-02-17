<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    $tasks = ['task1', 'task2'];
    return view('welcome', [
        'tasks'=> $tasks,
    ]);
});
