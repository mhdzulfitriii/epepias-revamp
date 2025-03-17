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
        Schema::create('lib_persatuans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('Persatuan');
            $table->string('Singkatan');
            $table->string('KodPersatuan');
            $table->string('NoBank')->nullable();
            $table->string('Bank')->nullable();
            $table->string('Nama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_persatuans');
    }
};
