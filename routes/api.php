<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\SupermercadoController;
use App\Http\Controllers\AuthSupermercadoController;


<<<<<<< HEAD
/* 
=======
Route::get('user',[SupermercadoController::class, 'index']);
Route::get('/user/{id}', [SupermercadoController::class, 'show']);
Route::post('/user', [SupermercadoController::class, 'store']);
Route::put('/user/{id}', [SupermercadoController::class, 'update']);
Route::delete('/user/{id}', [SupermercadoController::class, 'destroy']);

Route::get('order',[SupermercadoController::class, 'order']);
Route::get('/order/{id}', [SupermercadoController::class, 'show']);
Route::post('/order', [SupermercadoController::class, 'store']);
Route::put('/order/{id}', [SupermercadoController::class, 'update']);
Route::delete('/order/{id}', [SupermercadoController::class, 'destroy']);


Route::get('product',[SupermercadoController::class, 'product']);
Route::get('/product/{id}', [SupermercadoController::class, 'show']);
Route::post('/product', [SupermercadoController::class, 'store']);
Route::put('/product/{id}', [SupermercadoController::class, 'update']);
Route::delete('/product/{id}', [SupermercadoController::class, 'destroy']);


Route::get('category',[SupermercadoController::class, 'category']);
Route::get('/category/{id}', [SupermercadoController::class, 'show']);
Route::post('/category', [SupermercadoController::class, 'store']);
Route::put('/category/{id}', [SupermercadoController::class, 'update']);
Route::delete('/category/{id}', [SupermercadoController::class, 'destroy']);



Route::post('/login', [AuthSupermercadoController::class, 'login']);
Route::post('/register', [AuthSupermercadoController::class, 'register']);
>>>>>>> 11bbcd4e3ac074277696f4687459dc2ec157d649
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */
// Route::get('/users', [AnalyticsController::class, 'user']);

Route::get('/users',[SupermercadoController::class,'index']);