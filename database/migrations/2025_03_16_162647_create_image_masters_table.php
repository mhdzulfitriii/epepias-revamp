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
        Schema::create('image_masters', function (Blueprint $table) {
            $table->uuid('id')->primary();            
            $table->uuidMorphs('uploader');
            $table->uuidMorphs('documentable');
            $table->string('name');         // Original file name
            $table->string('path');         // File path
            $table->string('mime_type');    // File mime type
            $table->integer('size');        // File size in bytes
            $table->string('type')->nullable();        // File size in bytes
            $table->string('link')->nullable();        // File size in bytes            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_masters');
    }
};
