<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product',[ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/home', [Home::class, 'home']);
Route::get('/about', [Home::class, 'about']);
// Route::resource('posts', ProductController::class);