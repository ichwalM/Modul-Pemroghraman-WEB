<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'stok' => 'required|integer|min:0'
        ]);

        $result = Product::create($request->only(['name', 'price', 'description', 'stok']));

        // Cek apakah produk sudah ada
        if (isset($result['error'])) {
            return response()->json(['message' => $result['error']], 400);
        }

        return response()->json($result, 201);
    }

    public function index()
    {
        $products = Product::all();

        if (empty($products)) {
            return response()->json(['message' => 'Tidak ada produk yang tersedia.'], 200);
        }

        return response()->json($products, 200);
    }    
}
