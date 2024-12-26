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
        Schema::create('catatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembimbing_id')->constrained('pembimbing');
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa');
            $table->text('catatan');
            $table->foreignId('jadwal_id')->constrained('jadwal');
            $table->enum('status', ['belum_selesai', 'sudah_selesai'])->default('belum_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan');
    }
};