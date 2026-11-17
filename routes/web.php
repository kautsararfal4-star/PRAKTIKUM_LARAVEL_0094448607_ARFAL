<?php

use app\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login' function (petugasController::class));
