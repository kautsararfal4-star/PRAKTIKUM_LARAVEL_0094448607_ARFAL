<?php

use app\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});

route::get('/login',[petugasController::class, 'login']);
route::post('/login',[petugasController::class, 'proseslogin']);
route::get('/login',[petugasController::class, 'logout']);

Route::post('/dashboard', function (){
    return view('dashboard');
});

Route::get('/register',[petugasController::class,'register']);
Route::get('/register',[petugasController::class,'prosesregister']);