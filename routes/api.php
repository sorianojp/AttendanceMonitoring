<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

Route::post('/loginMobile', [AuthController::class, 'loginMobile']);
Route::middleware('auth:sanctum')->get('/attendancesMobile', [AttendanceController::class, 'indexMobile']);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
