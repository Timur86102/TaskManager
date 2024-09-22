<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectStateController;

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

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/project/{id}', [ProjectController::class, 'show']);

Route::get('/project_state', [ProjectStateController::class, 'index']);

Route::get('/project_state/{id}', [ProjectStateController::class, 'show']);