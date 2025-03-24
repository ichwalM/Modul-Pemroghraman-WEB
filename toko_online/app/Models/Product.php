<?php

namespace App\Models;

class Product
{
    public static function all()
    {
        return session('product', []);
    }

    public static function create($data)
    {
        $products = session('product', []);

        // Cek apakah nama produk sudah ada
        foreach ($products as $p) {
            if ($p['name'] === $data['name']) {
                return ['error' => 'Nama produk telah tersedia.'];
            }
        }

        $data['id'] = count($products) + 1;
        $data['stok'] = $data['stok'] ?? 0; // Default stok jika tidak diisi
        $products[] = $data;

        session(['product' => $products]);
        return $data;
    }

    public static function find($id)
    {
        $products = session('product', []);
        foreach ($products as $p) {
            if ($p['id'] == $id) {
                return $p;
            }
        }
        return null;
    }

    public static function updateStock($id, $jumlah)
    {
        $products = session('product', []);
        foreach ($products as &$p) {
            if ($p['id'] == $id) {
                if ($p['stok'] < $jumlah) {
                    return ['error' => 'Stok kurang.'];
                }
                $p['stok'] -= $jumlah;
                session(['product' => $products]);
                return $p;
            }
        }
        return ['error' => 'Produk tidak ditemukan.'];
    }
}
