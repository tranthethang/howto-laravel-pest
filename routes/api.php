<?php

use Illuminate\Support\Facades\Route;

Route::post('/users', [\App\Http\Controllers\Api\RegisterController::class, 'handle']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/users', [\App\Http\Controllers\Api\ProfileController::class, 'handle']);
});
