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
        // Menggunakan Schema::table untuk memodifikasi tabel yang sudah ada
        Schema::table('pelanggan', function (Blueprint $table) {
            // Perubahan: Mengubah kolom 'gender' menjadi enum
            $table->enum('gender', ['Male', 'Female', 'Other'])
                  ->nullable()
                  ->change(); // <- Kunci untuk mengubah kolom yang sudah ada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Membalikkan perubahan ke tipe string (misalnya)
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->string('gender', 255) // Ubah kembali ke tipe data awal sebelum enum
                  ->nullable()
                  ->change();
        });
    }
};
