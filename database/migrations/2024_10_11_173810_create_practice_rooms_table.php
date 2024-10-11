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
        Schema::create('practice_rooms', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto increment
            $table->string('name'); // Nama practice room
            $table->integer('capacity')->default(1); // Kapasitas ruangan, default 1
            $table->string('description')->nullable(); // Deskripsi ruangan, bisa null
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practice_rooms');
    }
};
