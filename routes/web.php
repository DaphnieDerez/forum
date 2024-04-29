<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// route to login form and logging in
Route::get('/user', [UserController::class, 'loginForm'])->name('users.login');

// route for users
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');

// route to forbidden
Route::get('/users/forbidden', [UserController::class, 'goForbidden'])->name('user.forbidden');

// route for posts CRUD
Route::get('/posts', [PostController::class, 'index']) ->name('posts.index')->middleware('auth');
Route::get('/posts/create', [PostController::class, 'create']) ->name('posts.create')->middleware('auth');
Route::post('/posts', [PostController::class, 'store']) ->name('posts.store')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::get('/posts/delete/{post}', [PostController::class, 'delete'])->name('posts.delete')->middleware('auth');

