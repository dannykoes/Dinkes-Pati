<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('activity_galleries', function (Blueprint $table) {
        $table->id();
        $table->string('activity_title'); // Judul Kegiatan
        $table->string('image');          // Nama file gambar
        $table->text('description')->nullable(); // Deskripsi Kegiatan (opsional)
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_galleries');
    }
};
