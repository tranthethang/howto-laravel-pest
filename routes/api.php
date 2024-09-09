<?php

use App\Http\Controllers\Api\AccessController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\RefreshController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('/token/access', [AccessController::class, 'issueToken'])->name('token.access');

Route::post('/token/refresh', [RefreshController::class, 'refresh'])->name('token.refresh');

Route::post('/users', [RegisterController::class, 'handle'])->name('users.register');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/users', [ProfileController::class, 'handle'])->name('users.profile');
});
