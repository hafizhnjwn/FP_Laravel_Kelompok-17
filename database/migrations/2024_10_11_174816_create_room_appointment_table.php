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
        Schema::create('appointment_rooms', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto increment
            $table->unsignedBigInteger('room_id'); // ID dari ruangan yang dipesan (relasi ke tabel rooms)
            $table->unsignedBigInteger('user_id'); // ID dari user atau pasien yang membuat janji
            $table->dateTime('appointment_start'); // Waktu mulai janji temu
            $table->dateTime('appointment_end'); // Waktu selesai janji temu
            $table->string('status')->default('scheduled'); // Status janji temu (scheduled, completed, canceled)
            $table->text('notes')->nullable(); // Catatan tambahan tentang janji temu
            $table->timestamps(); // Kolom created_at dan updated_at

            // Tambahkan foreign key untuk relasi ke tabel rooms dan users
            $table->foreign('room_id')->references('id')->on('inpatient_rooms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_rooms');
    }
};
