<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BuatUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:buat {role=siswa}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat user baru, contoh penggunaan : php artisan user:buat [ROLE=siswa,ketua]';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userRole = $this->argument('role');
        if ($userRole != 'siswa' AND $userRole != 'ketua') {
            $this->error('Role tidak ditemukan');
            return;
        }
        // if ($userRole != 'ketua' || $userRole != 'siswa' || $userRole != 'guru') {
        //     $this->error('Role tidak ditemukan');
        //     return;
        // }
        $this->info('MEMBUAT USER DI TERMINAL, by Femas');
        $this->info('Role : ' . $userRole);
        $name = $this->ask('Masukan nama user : ');
        if ($name === 'exit' or $name === 'keluar') {
            $this->error('Keluar');
            return;
        }
        if ($name === "" || $name === null) {
            $this->error('Nama idak boleh kosong');
            return;
        }
        $email = $this->ask('Masukan email user : ');
        if ($email === "" || $email === null) {
            $this->error('email tidak boleh kosong');
            return;
        }
        $password = $this->secret('Masukan password (tidak terlihat) : ');
        if ($password === "" || $password === null) {
            $this->error('Password tidak boleh kosong');
            return;
        }
        if ($this->confirm('Apakah data sudah benar : ', true)) {
            $dataUser = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'role' => $userRole,
            ];
            $modelUser = User::create($dataUser);

            if($modelUser) {
                $this->info('Berhasil membuat user baru : nama : ' . $name);
            }
            else {
                $this->error('Gagal membuat user');
            }
        }
        else {
            $this->error('Gagal membuat user');
        }
    }
}
