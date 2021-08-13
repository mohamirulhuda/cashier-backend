<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsSeeder extends Seeder
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
                'name' => 'Gethuk Pisang Kecil',
                'code' => 'MK001',
                'type_id' => 5,
                'unit_id' => 5,
                'sell_price' => 31500,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gethuk Pisang Besar',
                'code' => 'MK002',
                'type_id' => 5,
                'unit_id' => 5,
                'sell_price' => 9500,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
