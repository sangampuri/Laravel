<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;

Route::get('/',[DemoController::class,'index']);
Route::get('/about',[DemoController::class,'about']);
Route::resource('photos',PhotoController::class);

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'show']);

