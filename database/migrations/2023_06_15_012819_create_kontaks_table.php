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
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nomor_telepon');
            $table->string('alamat_kantor');
            $table->string('twitter')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak');
    }
};
