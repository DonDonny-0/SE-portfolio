<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);