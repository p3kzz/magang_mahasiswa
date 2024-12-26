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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->double('nilai_laporan');
            $table->foreignId('laporan_id')->constrained('upload_laporan');
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
        Schema::dropIfExists('penilaian');
    }
};