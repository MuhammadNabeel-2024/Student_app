<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index',[StudentsController::class,'index']);
Route::get('/create',[StudentsController::class,'create']);
Route::get('/profile/{$id}',[StudentsController::class, 'profile']);
