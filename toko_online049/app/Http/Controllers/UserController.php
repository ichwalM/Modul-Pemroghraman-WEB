<?php

// app/Http/Controllers/UserController.php 
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Log; 
use App\Models\User; 
use Illuminate\Http\Request; 

class UserController extends Controller 
{ 
    public function register(Request $request) 
    { 
        $request->validate([ 
            'name' => 'required|string|max:255', 
            'email' => 'required|string|email|max:255|unique:users', 
            'password' => 'required|string|min:2', 
        ]); 
 
        $user = User::create([ 
            'name' => $request->name, 
            'email' => $request->email, 
            'password' => bcrypt($request->password), 
        ]); 
 
        return response()->json($user, 201); 
    } 
 
    public function index() 
    { 
        return response()->json(User::all(), 200); 
    } 
 
    public function show($id) 
    { 
        $user = User::find($id); 
        return response()->json($user, 200); 
    } 
 
    public function update(Request $request, $id) 
    { 
        $request->validate([ 
            'name' => 'sometimes|required|string|max:255', 
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' 
. $id, 
        ]); 
 
        $user = User::find($id); 
        $user->update($request->only(['name', 'email'])); 
 
        return response()->json($user, 200); 
    } 
 
    public function destroy($id) 
    { 
        User::destroy($id); 
        return response()->json(null, 204); 
    } 
} 