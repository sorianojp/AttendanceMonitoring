<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::post('/login', [ApiController::class, 'login']);
Route::middleware('auth:sanctum')->get('/attendances', [ApiController::class, 'index']);
