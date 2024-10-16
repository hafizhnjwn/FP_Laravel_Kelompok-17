<?php

 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
 use Illuminate\Database\Migrations\Migration;

 return new class extends Migration
 {
     /**
      * Run the migrations.
      */
     public function up(): void
     {
         Schema::create('specialties', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->string('slug')->unique();
             $table->string('body');
             $table->timestamps();
         });
     }

     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('specialties');
     }
 };