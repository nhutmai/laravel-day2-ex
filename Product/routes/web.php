<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//all
Route::get('/products', [ProductController::class, 'index']);

//create
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/create', [ProductController::class, 'store']);

//update
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/edit/{id}', [ProductController::class, 'update']);

//delete
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);

//display a product
Route::get('/product/{id}', [ProductController::class, 'display']);
