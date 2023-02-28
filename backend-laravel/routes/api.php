<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserdataController;


//public routes

Route::get('/userdata', [UserdataController::class, 'index']);
Route::post('/createUser', [UserdataController::class, 'createUser']);

