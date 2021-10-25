<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OfferProductController;
use App\Http\Controllers\OrdersproductController;
use App\Http\Controllers\CustomerController;

Route::get('customer',[CustomerController::class, 'index']);
Route::get('/customer/{id}', [CustomerController::class, 'show']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::put('/customer/{id}', [CustomerController::class, 'update']); 
Route::delete('/Customer/{id}', [CustomerController::class, 'destroy']);

Route::get('/consulta2/{id}',[CustomerController::class, 'getpedidoscustomer']);

Route::get('order',[OrderController::class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'show']);

Route::put('/order/{id}', [OrderController::class, 'update']);
Route::delete('/order/{id}', [OrderController::class, 'destroy']);

Route::get('/consulta1/{id}',[OrderController::class, 'getpedidos']);


Route::get('product',[ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::get('/productoscategoria', [ProductController::class, 'getcategorias']);

Route::get('/ofertas',[ProductController::class, 'productosoferta']);

Route::get('category',[CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('offer',[OfferController::class, 'index']);
Route::get('/offer/{id}', [OfferController::class, 'show']);
Route::post('/offer', [OfferController::class, 'store']);
Route::put('/offer/{id}', [OfferController::class, 'update']);
Route::delete('/offer/{id}', [OfferController::class, 'destroy']);


/* Route::get('ordersproduct',[OrdersProductController::class, 'index']);
Route::get('/ordersproduct/{id}', [OrdersProductController::class, 'show']);
Route::post('/ordersproduct', [OrdersProductController::class, 'store']);
Route::put('/ordersproduct/{id}', [OrdersProductController::class, 'update']);
Route::delete('/ordersproduct/{id}', [OrdersProductController::class, 'destroy']); */

/* Route::get('offerproduct',[OfferProductController::class, 'index']);
Route::get('/offerproduct/{id}', [OfferProductController::class, 'show']);
Route::post('/offerproduct', [OfferProductController::class, 'store']);
Route::put('/offerproduct/{id}', [OfferProductController::class, 'update']);
Route::delete('/offerproduct/{id}', [OfferProductController::class, 'destroy']); */

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function(){
 /*     Route::get('customer',[CustomerController::class, 'index']);
   Route::get('/customer/{id}', [CustomerController::class, 'show']);
    Route::post('/customer', [CustomerController::class, 'store']);
    Route::put('/customer/{id}', [CustomerController::class, 'update']); */
    Route::post('/order', [OrderController::class, 'store']);

    Route::get('/logout', [AuthController::class, 'logout']);
}); 


