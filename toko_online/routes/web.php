<?php

use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\BeliController; 
Route::post('register', [UserController::class, 'register']);
Route::get('users', [UserController::class, 'index']); 
Route::post('products', [ProductController::class, 'store']); 
Route::get('products', [ProductController::class, 'index']); 
Route::post('belis', [BeliController::class, 'store']); 
Route::get('belis', [BeliController::class, 'index']); 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::post('/register', [UserController::class, 'register']);


Route::get('/', function () {
    return view('welcome');
});
