<?php

use App\Http\Controllers\TrainingSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('training-sessions', TrainingSessionController::class);
});
