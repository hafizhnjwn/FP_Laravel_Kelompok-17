<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Facility;
use App\Models\Specialty;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(SpecialtySeeder::class);
        Doctor::factory(100)->recycle(Specialty::factory(9)->create())->create();
        Facility::factory(100)->create();

    }
}
