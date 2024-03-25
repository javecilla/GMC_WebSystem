<?php

use App\Http\Controllers\App\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/{any?}', [PageController::class, 'index'])->where('any', '.*');