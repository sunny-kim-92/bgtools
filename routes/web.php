<?php

use App\Http\Controllers\SimulateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simulate', [SimulateController::class, 'simulate']);
