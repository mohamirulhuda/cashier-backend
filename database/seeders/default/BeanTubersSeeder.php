<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeanTubersSeeder extends Seeder
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
                'name' => 'Buah Melinko',
                'code' => 'UM' . sprintf("%03d", 1),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 40000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kulit Melinjo',
                'code' => 'UM' . sprintf("%03d", 2),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 20000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ubi / Ketela Kuning',
                'code' => 'UM' . sprintf("%03d", 3),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 10000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ubi / Ketela Putih',
                'code' => 'UM' . sprintf("%03d", 4),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 9000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ubi / Ketela Ungu',
                'code' => 'UM' . sprintf("%03d", 5),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 12000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Singkong Putih',
                'code' => 'UM' . sprintf("%03d", 6),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 8000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Singkong Kuning',
                'code' => 'UM' . sprintf("%03d", 7),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 8000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Tanah Kupas',
                'code' => 'UM' . sprintf("%03d", 8),
                'type_id' => 8,
                'unit_id' => 5,
                'sell_price' => 11000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Tanah',
                'code' => 'UM' . sprintf("%03d", 9),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 32000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Hijau',
                'code' => 'UM' . sprintf("%03d", 10),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 35000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Kedelai',
                'code' => 'UM' . sprintf("%03d", 11),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 29000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buah Bit',
                'code' => 'UM' . sprintf("%03d", 12),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 45000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Talas',
                'code' => 'UM' . sprintf("%03d", 13),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 27000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Merah Basah',
                'code' => 'UM' . sprintf("%03d", 14),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 26000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Merah Kering',
                'code' => 'UM' . sprintf("%03d", 15),
                'type_id' => 8,
                'unit_id' => 1,
                'sell_price' => 59000,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
