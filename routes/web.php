<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
Route::get('/', [IndexController::class, 'index']);
Route::post('/delete/{id}', [IndexController::class, 'destroy']);
Route::get('/create', [IndexController::class, 'create']);
Route::post('/create', [IndexController::class, 'store']);


Route::post('/create', [IndexController::class, 'store']);

