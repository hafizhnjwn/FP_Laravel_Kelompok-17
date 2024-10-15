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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto increment
            $table->string('name'); // Nama fasilitas
            $table->string('slug')->unique(); // Slug fasilitas, unique
            $table->string('icon')->nullable(); // Icon fasilitas, bisa null
            $table->string('description')->nullable(); // Deskripsi fasilitas, bisa null
            $table->boolean('available')->default(true); // Status ketersediaan fasilitas, default tersedia
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};