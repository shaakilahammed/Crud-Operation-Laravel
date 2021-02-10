<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'verify']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/home', [HomeController::class,'userlist']);
Route::get('/home/create', [HomeController::class,'create']);
Route::post('/home/create', [HomeController::class,'store']);
// Route::get('/home/userlist', [HomeController::class,'userlist']);
Route::get('/home/edit/{id}', [HomeController::class,'edit']);
Route::post('/home/edit/{id}', [HomeController::class,'update']);
Route::get('/home/delete/{id}', [HomeController::class,'delete']);
Route::post('/home/delete/{id}', [HomeController::class,'confirmDelete']);

