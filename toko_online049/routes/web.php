<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\BeliController; 
use Illuminate\Support\Facades\Log; 


Route::post('register', [UserController::class, 'register']); 
Route::get('users', [UserController::class, 'index']); 
Route::get('users/{id}', [UserController::class, 'show']); 
Route::put('users/{id}', [UserController::class, 'update']); 
Route::delete('users/{id}', [UserController::class, 'destroy']); 
Route::post('products', [ProductController::class, 'store']); 
Route::get('products', [ProductController::class, 'index']); 
Route::get('products/{id}', [ProductController::class, 'show']); 
Route::put('products/{id}', [ProductController::class, 'update']); 
Route::delete('products/{id}', [ProductController::class, 'destroy']); 
Route::post('belis', [BeliController::class, 'store']); 
Route::get('belis', [BeliController::class, 'index']); 
// Route::get('/', function (){ 
// return view('welcome'); 
// }); 

Route::post('/test-register', function () {
    return response()->json(['message' => 'Test Register Route'], 200);
});
Route::get('/about', function () { 
Log::channel('terminal')->error('Ini adalah pesan log kesalahan.'); 
return "Welcome to about page"; 
}); 