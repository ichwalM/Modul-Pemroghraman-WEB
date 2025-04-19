<?php
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MenuController::class,'index']);

Route::resource('menus',MenuController::class);
Route::resource('orders',OrderController::class);
Route::resource('customers',CustomerController::class);
