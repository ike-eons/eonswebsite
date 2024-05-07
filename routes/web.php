<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaintenanceController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MaintenanceController::class,'maintenance'])->name('maintenance');
