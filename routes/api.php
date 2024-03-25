<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
	Route::middleware('guest')->group(function () {
		Route::post('/user/login', [LoginController::class, 'index'])->middleware('throttle:api');
	});
});

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/tests', TestController::class);

Route::get('/hello', fn() => response()->json(['success' => true, 'message' => 'test']));
