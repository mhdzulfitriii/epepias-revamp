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
        Schema::create('daftar_programs', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('Program_ID')->constrained('programs')->onDelete('cascade');
            $table->string('Persatuan');
            $table->string('NamaPenuh');
            $table->string('NoIC');
            $table->string('email');
            $table->string('NoPhone');
            $table->string('NoPhonePenjaga');
            $table->string('Alamat');
            $table->string('Alahan')->nullable();
            $table->string('Jawatan')->nullable();
            $table->enum('Kehadiran', ['Hadir', 'Tidak Hadir'])->default('Tidak Hadir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_programs');
    }
};
