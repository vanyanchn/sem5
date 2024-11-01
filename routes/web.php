<?php

use App\Http\Controllers\show_adminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [show_adminController::class, 'show_dashboard']);
});
Route::get('', function () {
    return view('welcome');
});
