<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdSeeder::class,
            ImageSeeder::class,
            SellerSeeder::class,
            VehicleDetailSeeder::class,
            TechnicalDetailSeeder::class,
            IndividualConfigurationSeeder::class
        ]);
    }
}
