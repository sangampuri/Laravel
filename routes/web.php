<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;

Route::get('/',[DemoController::class,'index']);
Route::get('/about',[DemoController::class,'about']);
Route::resource('photos',PhotoController::class);

