<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\EkstrakurikulerSeeder;
use Database\Seeders\GalerySeeder;
use Database\Seeders\ProfilSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GuruSeeder::class,
            JurusanSeeder::class,
            EkstrakurikulerSeeder::class,
            GalerySeeder::class,
            ProfilSeeder::class,
        ]);
    }
}