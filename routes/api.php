<?php

use App\Http\Controllers\Api\V1\Auth\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
	// public api
	Route::middleware('guest')->group(function () {
		Route::post('/user/login', [UserController::class, 'login']);
	});

	// private api
	Route::middleware('auth:sanctum')->group(function () {
		Route::get('/user', [UserController::class, 'index']);
		Route::post('/user/logout', [UserController::class, 'logout']);
		Route::get('/user/token', [UserController::class, 'token']);
	});
});
