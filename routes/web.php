<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

// route to login form and logging in
Route::get('/user', [UserController::class, 'loginForm'])->name('user.login');

// routes for creating user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// route to forbidden
Route::get('/users/forbidden', [UserController::class, 'goForbidden'])->name('user.forbidden');


// routes for posts crud
Route::get('/posts', [PostController::class, 'index'])->name('posts.home')->middleware('auth');
Route::get('/posts/create', [PostController::class, 'index'])->name('posts.create')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete')->middleware('auth');


