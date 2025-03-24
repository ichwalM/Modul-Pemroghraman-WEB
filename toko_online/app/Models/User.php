<?php

namespace App\Models;

class User
{
    public static function all()
    {
        return session('users', []);
    }

    public static function create($data)
    {
        $users = session('users', []); // Pastikan $users diinisialisasi sebelum digunakan

        // Cek apakah email sudah digunakan
        foreach ($users as $user) {
            if ($user['email'] === $data['email']) {
                return ['error' => 'Email telah tersedia.'];
            }
        }

        $data['id'] = count($users) + 1;
        $users[] = $data;
        session(['users' => $users]);
        return $data;
    }
public static function find($id)
    {
        $users = session('users', []);
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

    public static function findByEmail($email)
    {
        $users = session('users', []);
        foreach ($users as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

}
