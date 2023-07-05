<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role');
            $table->string('nisn')->unique()->nullable(true);
            $table->foreignUuid('sekolah_id')->nullable()->constrained('sekolah', 'id')->onDelete('restrict');
            $table->string('awal_pkl')->nullable(true);
            $table->string('akhir_pkl')->nullable(true);
            $table->string('foto_siswa')->nullable(true);
            $table->integer('sakit')->default(0);
            $table->integer('acara_keluarga')->default(0);
            $table->integer('darurat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
