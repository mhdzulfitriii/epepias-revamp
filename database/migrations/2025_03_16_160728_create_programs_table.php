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
        Schema::create('programs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('NamaProgram');
            $table->string('Tempat');
            $table->uuid('Image_ID')->nullable();
            $table->string('Persatuan_ID')->nullable();
            $table->date('StartDate');
            $table->date('EndDate')->nullable();
            $table->enum('Status', ['Aktif', 'Tidak Aktif'])->default("Aktif");
            $table->boolean('MyHadir')->default(false);
            $table->string('JenisProgram');
            $table->string('Majlis');
            $table->string('Link');
            $table->enum('Mode', ['Peserta', 'Penggerak']);
            $table->string('Slug');
            $table->string('KodProgram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
