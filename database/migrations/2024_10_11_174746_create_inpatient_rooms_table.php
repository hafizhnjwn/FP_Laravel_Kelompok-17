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
        Schema::create('inpatient_rooms', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto increment
            $table->string('name'); // Nama ruangan rawat inap
            $table->enum('kelas', ['VIP', '1', '2', '3']); // Kelas ruangan, bisa VIP, 1, 2, atau 3
            $table->integer('capacity')->default(1); // Kapasitas ruangan, default 1
            $table->decimal('price', 10, 2); // Harga ruangan dengan dua desimal (misal: 1000.00)
            $table->string('description')->nullable(); // Deskripsi ruangan, bisa null
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inpatient_rooms');
    }
};
