<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicle_details')->insert([
            'ad_id' => 1,
            'make' => 'FIAT',
            'series' => '500',
            'model' => '500 D',
            'manufacturer_code' => '110 D',
            'first_registration_date' => '07/1961',
            'year_of_manufacture' => 1960,
            'mileage' => '79,600 km',
            'matching_numbers' => 'Yes'
        ]);

        DB::table('vehicle_details')->insert([
            'ad_id' => 2,
            'make' => 'Ferrari',
            'model' => 'Testarossa',
            'first_registration_date' => '06/1984',
            'year_of_manufacture' => 1984,
            'mileage' => '41,473 km',
            'matching_numbers' => 'Yes',
            'previous_owners' => 3
        ]);
    }
}
