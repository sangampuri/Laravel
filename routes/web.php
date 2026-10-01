<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/',[DemoController::class,'index']);
Route::get('/about',[DemoController::class,'about']);