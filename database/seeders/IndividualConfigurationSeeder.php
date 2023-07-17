<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndividualConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('individual_configurations')->insert([
            'ad_id' => 1,
            'exterior_color' => 'Green',
            'manufacturer_color_name' => 'Verde chiaro 363',
            'sun_roof' => 'Yes',
            'folding_roof' => 'No',
            'power_assisted_steering' => 'No',
            'central_locking' => 'No',
            'electric_windows' => 'No',
            'interior_color' => 'Green',
            'interior_material' => 'Imitation leather',
            'heated_seats' => 'No',
            'air_conditioning' => 'No',
            'abs' => 'No',
            'airbag' => 'No',
            'cruise_control' => 'No',
        ]);

        DB::table('individual_configurations')->insert([
            'ad_id' => 2,
            'exterior_color' => 'Red',
            'manufacturer_color_name' => 'Rosso corsa',
            'sun_roof' => 'No',
            'folding_roof' => 'No',
            'power_assisted_steering' => 'No',
            'central_locking' => 'Yes',
            'electric_windows' => 'Yes',
            'interior_color' => 'Black',
            'interior_material' => 'Leather',
            'heated_seats' => 'No',
            'air_conditioning' => 'Yes',
            'abs' => 'No',
            'airbag' => 'No',
            'cruise_control' => 'No',
        ]);
    }
}
