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
        Schema::create('upload_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string(column: 'file_laporan');
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa');
            $table->foreignId('penguji_id')->constrained('penguji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_laporan');
    }
};