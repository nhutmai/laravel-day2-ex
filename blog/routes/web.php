<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createPost',[PostController::class,'createPost']);

Route::get('/getPosts',[PostController::class,'getPosts']);
