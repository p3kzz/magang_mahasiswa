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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->date('tanggal');
            $table->foreignId('magang_id')->constrained('magang');
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa');
            $table->foreignId(column: 'pembimbing_id')->constrained('pembimbing');
            $table->foreignId(column: 'penguji_id')->constrained('penguji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};