<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

Route::get('/{any?}', [PageController::class, 'index'])->where('any', '.*');
