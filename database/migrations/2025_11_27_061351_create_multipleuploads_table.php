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
        Schema::create('multipleuploads', function (Blueprint $table) {
            $table->id();
            $table->string('ref_table', 100);     // nama tabel pemilik file (pelanggan, product, article, dll)
            $table->unsignedBigInteger('ref_id'); // ID data pemilik file
            $table->string('filename');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('multipleuploads');
    }
};
