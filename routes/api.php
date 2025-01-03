<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TrainerApiController;
use App\Http\Controllers\Api\ServiceApiController;
use App\Http\Controllers\Api\ContactApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/trainers', TrainerApiController::class);
Route::apiResource('/gym-services', ServiceApiController::class);
Route::apiResource('/contact', ContactApiController::class);