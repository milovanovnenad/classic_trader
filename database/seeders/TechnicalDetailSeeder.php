<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnicalDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technical_details')->insert([
            'ad_id' => 1,
            'body_style' => 'Saloon (2-doors)',
            'power' => '13/18',
            'cubic_capacity' => 499,
            'cylinders' => 2,
            'doors' => 2,
            'steering' => 'Left (LHD)',
            'gearbox' => 'Manual',
            'gears' => 4,
            'transmission' => 'Rear',
            'fuel_type' => 'Petrol'
        ]);

        DB::table('technical_details')->insert([
            'ad_id' => 2,
            'body_style' => 'Coupe',
            'power' => '287/390',
            'cubic_capacity' => 4943,
            'cylinders' => 12,
            'doors' => 2,
            'steering' => 'Left (LHD)',
            'gearbox' => 'Manual',
            'gears' => 5,
            'transmission' => 'Rear',
            'front_brakes' => 'Disc',
            'rear_brakes' => 'Disc',
            'fuel_type' => 'Petrol'
        ]);
    }
}
