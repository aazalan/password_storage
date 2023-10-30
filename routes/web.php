<?php

use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PasswordController::class, 'index']);

Route::get('/password', [PasswordController::class, 'create']);

Route::get('/password/{id}', [PasswordController::class, 'edit']);

Route::post('/password', [PasswordController::class, 'store']);

Route::post('/password/{id}', [PasswordController::class, 'update']);

