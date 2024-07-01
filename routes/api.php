<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::put('/post/{post}/update', [PostController::class, 'update']);
Route::post('/post', [PostController::class, 'store']);
Route::delete('/post/{post}/delete', [PostController::class, 'destroy']);