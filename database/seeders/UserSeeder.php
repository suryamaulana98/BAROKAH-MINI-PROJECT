<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'pembimbing',
            'email' => 'pembimbing@pembimbing.com',
            'password' => Hash::make('pembimbing'),
            'role' => 'pembimbing',
        ]);     
        DB::table('users')->insert([
            'name' => 'guru',
            'email' => 'guru@guru.com',
            'password' => Hash::make('guru'),
            'role' => 'guru',
        ]);
        DB::table('users')->insert([
            'name' => 'ketua',
            'email' => 'ketua@ketua.com',
            'password' => Hash::make('ketua'),
            'role' => 'ketua',
        ]);
        DB::table('users')->insert([
            'name' => 'siswa',
            'email' => 'siswa@siswa.com',
            'password' => Hash::make('siswa'),
            'role' => 'siswa',
        ]);
    }
}
