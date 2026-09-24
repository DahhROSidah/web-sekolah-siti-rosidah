<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->string('judul_foto');
            $table->string('file_foto'); // Menyimpan nama file gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeries');
    }
};