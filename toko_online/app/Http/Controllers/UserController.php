<?php

namespace App\Http\Controllers; 
use App\Models\User; 
use Illuminate\Http\Request; 

class UserController extends Controller 
{ 
    public function register(Request $request) 
    { 
        $request->validate([ 
            'name' => 'required|string|max:255', 
            'email' => 'required|string|email|max:255|unique:users', 
            'password' => 'required|string|min:8', 
        ]); 

        $user = User::create($request->only(['name', 'email', 'password'])); 
        return response()->json($user, 201); 
    } 

    public function index() 
    { 
        return response()->json(User::all(), 200); 
    } 
} 
