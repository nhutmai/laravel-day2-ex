<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs',[PostController::class,'index']);

Route::get('/createPost',[PostController::class,'createPost']);
Route::post('/createPost',[PostController::class,'storePost']);

Route::get('/editPost/{id}',[PostController::class,'editPost']);
Route::post('/editPost/{id}',[PostController::class,'updatePost']);

Route::get('/deletePost/{id}',[PostController::class,'deletePost']);
