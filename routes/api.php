<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingSessionController;

Route::middleware('auth:sanctum')->group(function () {
  Route::apiResource('training-sessions', TrainingSessionController::class);
});
