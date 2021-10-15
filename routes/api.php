<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
/**use App\Http\Controllers\AuthCategoryController;**/
use App\Http\Controllers\ProductController;
/**use App\Http\Controllers\AuthProductController;**/
use App\Http\Controllers\OrderController;
/**use App\Http\Controllers\AuthOrderController;*/
use App\Http\Controllers\OfferController;
/**use App\Http\Controllers\AuthOfferController;*/
use App\Http\Controllers\OfferProductController;
use App\Http\Controllers\OrdersproductController;
use App\Http\Controllers\ImageController;

/* Route::get('user',[UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']); */
//Route::delete('/user/{id}', [UserController::class, 'destroy']);
// Route::post('/user',[UserController::class, 'AuthUserController']);

Route::get('order',[OrderController::class, 'index']);
//Route::get('/order/{id}', [OrderController::class, 'show']);
//Route::post('/order', [OrderController::class, 'store']);
//Route::put('/order/{id}', [OrderController::class, 'update']);
// Route::delete('/order/{id}', [OrderController::class, 'destroy']);
// Route::post('/Order',[OrderController::class, 'AuthOrderController']);
Route::get('order',[OrderController::class, 'getpedidos']);

Route::get('product',[ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'update']);
//Route::delete('/product/{id}', [ProductController::class, 'destroy']);
// Route::post('/product',[ProductController::class, 'AuthProductController']);


//Route::get('category',[CategoryController::class, 'index']);
//Route::get('/category/{id}', [CategoryController::class, 'show']);
// Route::post('/category', [CategoryController::class, 'store']);
// Route::put('/category/{id}', [CategoryController::class, 'update']);
// Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
// Route::post('/category',[CategoryController::class, 'AuthCategoryController']);

 Route::get('offer',[OfferController::class, 'index']);
 Route::get('/offer/{id}', [OfferController::class, 'show']);
 Route::post('/offer', [OfferController::class, 'store']);
 Route::put('/offer/{id}', [OfferController::class, 'update']);
 Route::delete('/offer/{id}', [OfferController::class, 'destroy']);
// Route::post('/offer',[OfferController::class, 'AuthCategoryController']);

 Route::get('ordersproduct',[OrdersProductController::class, 'index']);
 Route::get('/ordersproduct/{id}', [OrdersProductController::class, 'show']);
 Route::post('/ordersproduct', [OrdersProductController::class, 'store']);
 Route::put('/ordersproduct/{id}', [OrdersProductController::class, 'update']);
 Route::delete('/ordersproduct/{id}', [OrdersProductController::class, 'destroy']);

Route::get('offerproduct',[OfferProductController::class, 'index']);
Route::get('/offerproduct/{id}', [OfferProductController::class, 'show']);
Route::post('/offerproduct', [OfferProductController::class, 'store']);
Route::put('/offerproduct/{id}', [OfferProductController::class, 'update']);
Route::delete('/offerproduct/{id}', [OfferProductController::class, 'destroy']);

Route::get('image',[ImageController::class, 'index']);
Route::get('/image/{id}', [ImageController::class, 'show']);
Route::post('/image', [ImageController::class, 'store']);
Route::put('/image/{id}', [ImageController::class, 'update']);
Route::delete('/image/{id}', [ImageController::class, 'destroy']);




// Route::get('/productos', function () {
//     $products = \App\Product::all();
//     return view('products', ['products' => $products]);
// });
Route::post('/user_login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('user',[UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::post('/user', [UserController::class, 'store']);
    Route::put('/user/{id}', [UserController::class, 'update']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
