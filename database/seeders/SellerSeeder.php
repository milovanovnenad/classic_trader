<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sellers')->insert([
            'id' => 1,
            'image_id' => 4,
            'company_name' => 'TOMMYCAR Classic & Sport Cars',
            'first_name' => 'Domenico',
            'last_name' => 'Grieco',
            'street' => 'Via Francesco Egidi',
            'street_number' => 77,
            'postal_code' => '63900',
            'city' => 'Fermo',
            'flag' => '🇮🇹',
            'country' => 'Italy'
        ]);

        DB::table('sellers')->insert([
            'id' => 2,
            'image_id' => 8,
            'company_name' => 'Auto Storica',
            'first_name' => 'Olivier',
            'last_name' => 'Le Scanf',
            'street' => 'Av. de la Marina',
            'street_number' => 20,
            'postal_code' => '08830',
            'city' => 'Sant Boi de Llobregat',
            'flag' => '🇪🇸',
            'country' => 'Spain'
        ]);
    }
}
