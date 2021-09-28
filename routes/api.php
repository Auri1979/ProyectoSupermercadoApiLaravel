<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\Http\Controllers\AuthSupermercadoController;


Route::get('user',[UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
/* 
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/users', [AnalyticsController::class, 'user']);

Route::get('/users',[SupermercadoController::class,'index']); */