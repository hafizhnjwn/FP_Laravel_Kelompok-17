<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kelas',
        'capacity',
        'price',
        'description',
    ];

    public function appointments()
    {
        return $this->hasMany(Doctor::class);
    }
}
