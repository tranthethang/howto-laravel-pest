<?php

use Illuminate\Support\Facades\Route;

Route::post('/users', [\App\Http\Controllers\Api\RegisterController::class, 'handle']);
