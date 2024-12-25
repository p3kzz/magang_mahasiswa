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
        Schema::create('info_magang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');
            $table->string('lokasi');
            $table->date('periode_mulai');
            $table->date('periode_selesai');
            $table->integer('kouta')->nullable();
            $table->string('persyaratan')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_magang');
    }
};