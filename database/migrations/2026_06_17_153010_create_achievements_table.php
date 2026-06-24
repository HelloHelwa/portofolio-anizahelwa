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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul acara / nama organisasi
            $table->string('category'); // Filter ('public_speaking' atau 'organization')
            $table->string('date_info'); // Keterangan waktu (misal: Maret 2026)
            $table->text('description'); // Deskripsi peran / pencapaian
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
