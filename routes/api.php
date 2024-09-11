<?php

use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Api\Auth\CalendarController;
use App\Helpers\Encoder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route group with 'api' middleware
Route::middleware('api')->group(function () {
	// Route group with guest for un authenticated routes
	Route::middleware('guest')->group(function () {
		Route::post('/user/login', [UserController::class, 'login']);
		//Route::get('/calendars/school-year/{schoolYear}', [CalendarController::class, 'show']);
	});

	// Route group with 'auth:sanctum' middleware for authenticated routes
	Route::middleware('auth:sanctum')->group(function () {
		// User routes
		Route::get('/user', [UserController::class, 'user']);
		Route::post('/user/logout', [UserController::class, 'logout']);

		// Calendar routes
		Route::post('/calendars/store', [CalendarController::class, 'store']);
		Route::get('/calendars/school-year/{schoolYear}', [CalendarController::class, 'show']);
		Route::patch('/calendar/{id}/school-year/{schoolYear}/pin-status/{pin}', [CalendarController::class, 'toggle']);
		Route::patch('/calendar/update', [CalendarController::class, 'update']);
		Route::delete('/calendar/{id}/destroy', [CalendarController::class, 'destroy']);
	});
});
