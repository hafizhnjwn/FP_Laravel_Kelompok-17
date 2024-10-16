<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\HasMany;
 use Illuminate\Notifications\Notifiable;

 class Specialty extends Model
 {
     use HasFactory, Notifiable;

     protected $fillable = [
        'name'
    ];

     public function doctors(): HasMany
     {
         return $this->hasMany(Doctor::class);      
     }
 } 