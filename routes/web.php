<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\UserController;


// route for users
Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');

// route for posts CRUD
Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']) ->name('posts.create');
Route::post('/posts', [PostController::class, 'store']) ->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');

