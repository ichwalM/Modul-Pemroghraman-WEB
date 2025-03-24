<?php

namespace App\Models;

class Beli
{
    public static function all()
    {
        return session('beli', []);
    }

    public static function create($data)
    {	
	// Validasi ID pengguna
        $user = User::find($data['user_id']);
        if (!$user) {
            return ['error' => 'Pengguna tidak ditemukan.'];
        }

        // Validasi ID produk
        $product = Product::find($data['product_id']);
        if (!$product) {
            return ['error' => 'Produk tidak ditemukan.'];
        }

        // Validasi stok
        $updateResult = Product::updateStock($data['product_id'], $data['quantity']);
        if (isset($updateResult['error'])) {
            return $updateResult;
        }

        // Simpan pembelian ke dalam session
        $beli = session('beli', []);
        $data['id'] = count($beli) + 1;
        $beli[] = $data;
        session(['beli' => $beli]);

        return ['message' => 'Pembelian berhasil.', 'data' => $data];
    }

    public static function find($id)
    {
        $beli = session('beli', []);
        foreach ($beli as $transaction) {
            if ($transaction['id'] == $id) {
                return $transaction;
            }
        }
        return null;
    }
}
