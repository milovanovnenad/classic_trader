<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ads')->insert([
            'id' => 1,
            'seller_id' => 1,
            'title' => 'FIAT 500 D',
            'subtitle' => 'Trasformabile - Primissima serie D - Omologata Registro Fiat Italiano',
            'year' => 1960,
            'price' => '22,000 €'
        ]);

        DB::table('ads')->insert([
            'id' => 2,
            'seller_id' => 2,
            'title' => 'Ferrari Testarossa',
            'subtitle' => 'Preseries',
            'year' => 1984,
            'price' => '225,000 €'
        ]);
    }
}
