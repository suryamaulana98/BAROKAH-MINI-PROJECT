<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'pembimbing',
            'email' => 'pembimbing@pembimbing.com',
            'password' => Hash::make('pembimbing'),
            'role' => 'pembimbing',
        ]);
        User::create([
            'name' => 'guru',
            'email' => 'guru@guru.com',
            'password' => Hash::make('guru'),
            'role' => 'guru',
        ]);
        User::create([
            'name' => 'ketua',
            'email' => 'ketua@ketua.com',
            'password' => Hash::make('ketua'),
            'role' => 'ketua',
        ]);
        User::create([
            'name' => 'siswa',
            'email' => 'siswa@siswa.com',
            'password' => Hash::make('siswa'),
            'role' => 'siswa',
        ]);
    }
}
