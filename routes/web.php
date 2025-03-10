<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//HomePage
Route::get('/', [HomeController::class, 'index']);
//Routes For Jobs
// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{id}',[JobController::class, 'show']);
Route::resource('/jobs', JobController::class);
