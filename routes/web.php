<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Models\Attendance;
use Carbon\Carbon;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function() {
    $attendances = Attendance::orderBy('updated_at', 'desc')->take(10)->get();
    $today = Carbon::now()->format('F d, h:i:s A');
    return view('rfid_scan', compact('attendances', 'today'));
});

Route::get('/privacy-policy', function() {
    return view('privacy');
});

Route::resource('attendances', AttendanceController::class);


Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('users.students', StudentController::class)->shallow();
});

require __DIR__.'/auth.php';
