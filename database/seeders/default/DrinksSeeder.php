<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commodities')->insert([
            [
                'name' => 'Susu Sapi Segar',
                'code' => 'MI001',
                'type_id' => 6,
                'unit_id' => 5,
                'sell_price' => 18000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
