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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nama proyek/karya
            $table->string('category'); // Filter (misal: 'tech' atau 'competition')
            $table->string('role_or_subtitle')->nullable(); // Peran kamu (misal: Back-end Developer)
            $table->text('description'); // Penjelasan proyek
            $table->string('image_path')->nullable(); // Foto/Visual pendukung
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
