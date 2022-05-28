<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware(['auth:sanctum', 'verified'])->get('/', [PostController::class, 'index'])->name('posts.index');

Route::middleware(['auth:sanctum', 'verified'])->get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::middleware(['auth:sanctum', 'verified'])->get('category/{category}', [PostController::class, 'category'])->name('posts.category'); 

Route::middleware(['auth:sanctum', 'verified'])->get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag'); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
