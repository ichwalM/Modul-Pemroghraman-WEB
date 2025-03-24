<?php

namespace App\Http\Controllers;

use App\Models\Beli;
use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);
        $purchase = Beli::create($request->only(['user_id', 'product_id', 'quantity']));
        return response()->json($purchase, 201);
    }
    public function index()
    {
        return response()->json(Beli::all(), 200);
    }
}
