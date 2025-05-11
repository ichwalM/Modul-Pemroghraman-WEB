<?php

 
// app/Http/Controllers/ProductController.php 
namespace App\Http\Controllers; 
 
use App\Models\Product; 
use Illuminate\Http\Request; 
 
class ProductController extends Controller 
{ 
    public function index() 
    { 
        return response()->json(Product::all(), 200); 
    } 
 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'name' => 'required|string|max:255', 
            'price' => 'required|numeric', 
            'description' => 'nullable|string', 
        ]); 
 
        $product = Product::create($request->only(['name', 'price', 'description'])); 
        return response()->json($product, 201); 
    } 
 
    public function show($id) 
    { 
        $product = Product::find($id); 
        return response()->json($product, 200); 
    } 
 
    public function update(Request $request, $id) 
    { 
        $product = Product::find($id); 
        $product->update($request->only(['name', 'price', 'description'])); 
        return response()->json($product, 200); 
    } 
 
    public function destroy($id) 
    { 
        Product::destroy($id); 
        return response()->json(null, 204); 
        } 
        } 