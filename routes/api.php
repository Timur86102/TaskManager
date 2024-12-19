<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectStateController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskStateController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/current_user', function (Request $request) {
        return $request->user();
    });

    Route::get('/user', [UserController::class, 'index']);

    Route::get('/user/{id}', [UserController::class, 'show']);
    
    Route::get('/project', [ProjectController::class, 'index']);

    Route::get('/project_total', [ProjectController::class, 'total']);

    Route::get('/project/{id}', [ProjectController::class, 'show']);
    
    Route::post('/project', [ProjectController::class, 'store']);

    Route::put('/project/{id}', [ProjectController::class, 'update']);

    Route::delete('/project/{id}', [ProjectController::class, 'destroy']);

    Route::get('/project_state', [ProjectStateController::class, 'index']);
    
    Route::get('/project_state/{id}', [ProjectStateController::class, 'show']);

    Route::get('/task', [TaskController::class, 'index']);

    Route::get('/task_total', [TaskController::class, 'total']);

    Route::get('/task/{id}', [TaskController::class, 'show']);
    
    Route::get('/task_state', [TaskStateController::class, 'index']);
    
    Route::get('/task_state/{id}', [TaskStateController::class, 'show']);

    Route::get('/logout', [AuthController::class, 'logout']);

});

Route::post('/login', [AuthController::class, 'login']);

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/project', [ProjectController::class, 'index']);

// Route::get('/project/{id}', [ProjectController::class, 'show']);

// Route::get('/project_state', [ProjectStateController::class, 'index']);

// Route::get('/project_state/{id}', [ProjectStateController::class, 'show']);