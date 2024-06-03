<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReviewController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user()->load(['gigs', 'reviews']);
})->middleware('auth:sanctum');

Route::get('/user/{user}', function (User $user) {
    return $user;
});

Route::post('/login', [AuthController::class, 'Login']);
Route::post('/register', [AuthController::class, 'Register']);
Route::post('/logout', [AuthController::class, 'Logout'])->middleware('auth:sanctum');

Route::get('/gigs', [GigController::class, 'index']);
Route::get('/gig/show/{id}', [GigController::class, 'show']);
Route::post('/gigs/add', [GigController::class, 'store'])->middleware('auth:sanctum');
Route::post('/gigs/update/{id}', [GigController::class, 'update'])->middleware('auth:sanctum');
Route::post('/gigs/delete/{id}', [GigController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/gigs/{id}/reviews/', [ReviewController::class, 'show']);
Route::post('/gigs/reviews', [ReviewController::class, 'store'])->middleware('auth:sanctum');
Route::post('/gigs/{id}/reviews/delete', [ReviewController::class, 'destroy'])->middleware('auth:sanctum');


Route::post('/chats', [ChatController::class, 'createChat']);
Route::get('/chat/{id}', [ChatController::class, 'userChats']);
Route::get('/find/{firstId}/{secondId}', [ChatController::class, 'findChat']);

Route::post('/message', [MessageController::class, 'addMessage']);
Route::get('/message/{chatId}', [MessageController::class, 'getMessages']);
