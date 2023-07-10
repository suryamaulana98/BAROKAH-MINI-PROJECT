<?php

namespace Database\Seeders;

use App\Models\Sekolah;
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

        $sekolah = Sekolah::create([
            'name' => 'SMKN 1 LUMAJANG',
        ]);
        $id = $sekolah->id;
        User::create([
            'name' => 'guru',
            'email' => 'guru@guru.com',
            'password' => Hash::make('guru'),
            'role' => 'guru',
            'sekolah_id' => $id,
        ]);

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
            'name' => 'ketua',
            'email' => 'ketua@ketua.com',
            'password' => Hash::make('ketua'),
            'sekolah_id' => $id,
            'role' => 'ketua',
            'nisn' => '12345678931',
            'awal_pkl' => '2023-02-02',
            'akhir_pkl' => '2023-02-02',
            'foto_siswa' => 'test.jpg',
        ]);
        User::create([
            'name' => 'siswa',
            'email' => 'siswa@siswa.com',
            'sekolah_id' => $id,
            'password' => Hash::make('siswa'),
            'role' => 'siswa',
            'nisn' => '12235678901',
            'awal_pkl' => '2023-02-02',
            'akhir_pkl' => '2023-02-02',
            'foto_siswa' => 'test.jpg',
        ]);
    }
}
