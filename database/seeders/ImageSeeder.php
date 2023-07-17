<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'ad_id' => 1,
            'file_name' => 'vehicle_ad_standard_image_eab6329f005a55dc3b02fb62a3067962.jpg'
        ]);
        DB::table('images')->insert([
            'ad_id' => 1,
            'file_name' => 'vehicle_ad_standard_image_6658fa599e44d109a9e8a9ddad1f226f.jpg'
        ]);
        DB::table('images')->insert([
            'ad_id' => 1,
            'file_name' => 'vehicle_ad_standard_image_4f93444a0c8560717c1fe1c295a8726e.jpg'
        ]);
        DB::table('images')->insert([
            'id' => 4,
            'seller_id' => 1,
            'file_name' => 'trader_homepage_asset_5133eee0946cef66706659ab6cb59e65.png'
        ]);

        DB::table('images')->insert([
            'ad_id' => 2,
            'file_name' => 'vehicle_ad_standard_image_ab72b22abdf96c80814527697a8b0b8b.jpg'
        ]);
        DB::table('images')->insert([
            'ad_id' => 2,
            'file_name' => 'vehicle_ad_standard_image_5097704e7307d55eeff94c958649777e.jpg'
        ]);
        DB::table('images')->insert([
            'ad_id' => 2,
            'file_name' => 'vehicle_ad_standard_image_060e8b5c3e6fe9a6d22996ffd50fecc7.jpg'
        ]);
        DB::table('images')->insert([
            'id' => 8,
            'seller_id' => 2,
            'file_name' => 'trader_homepage_asset_70f6c6be1c6c2892e9102d080cb8dcd1.png'
        ]);
    }
}
