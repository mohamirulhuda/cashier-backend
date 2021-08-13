<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasoningsSeeder extends Seeder
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
                'name' => 'Bawang Putih 250gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 1),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bawang Putih Kating 250gr',
                'sell_price' => 11000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 2),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bawang Merah 250gr',
                'sell_price' => 12000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 3),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bawang Bombay 500gr',
                'sell_price' => 16000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 4),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jahe Lokal 250gr',
                'sell_price' => 95000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 5),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jahe Merah 250gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 6),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kencur 250gr',
                'sell_price' => 11500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 7),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Temulawak 250gr',
                'sell_price' => 4500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 8),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lengkuas 250gr',
                'sell_price' => 3500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 9),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kunyit 250gr',
                'sell_price' => 3500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 10),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Serai 250gr',
                'sell_price' => 4500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 11),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Totole',
                'sell_price' => 17000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 12),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gula Pasir 250gr',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 13),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gula Aren 250gr',
                'sell_price' => 15000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 14),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gula Merah 250gr',
                'sell_price' => 8000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 15),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gula Kelapa 250gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 16),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gula Halus',
                'sell_price' => 0,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 17),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tepung Meizena 250gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 18),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tepung Beras 250gr',
                'sell_price' => 5500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 19),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tepung Terigu 250gr',
                'sell_price' => 3500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 20),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tepung Kanji',
                'sell_price' => 0,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 21),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tepung Ketan Putih',
                'sell_price' => 0,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 22),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Garam Dapur',
                'sell_price' => 4000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 23),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Garam Meja 250gr',
                'sell_price' => 4000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 24),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Ketumbar 250gr',
                'sell_price' => 11500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 25),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cabe Rawit Merah 250gr',
                'sell_price' => 20000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 26),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cabe Hijau Besar 250gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 27),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cabe Merah Besar 250gr',
                'sell_price' => 12000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 28),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cabe Rawit Hijau 250gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 29),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cabe Hijau Tua Kecil 250gr',
                'sell_price' => 15000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 30),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cabe Keriting Merah 250gr',
                'sell_price' => 9500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 31),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ketumbar 60gr',
                'sell_price' => 4000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 32),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kemiri Pecah 100gr',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 33),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Merica Bubuk',
                'sell_price' => 1500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 34),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Merica Kasar 100gr',
                'sell_price' => 15000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 35),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kapulaga',
                'sell_price' => 3000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 36),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jinten',
                'sell_price' => 3000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 37),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bunga Lawang',
                'sell_price' => 3000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 38),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pala',
                'sell_price' => 3000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 39),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kayu Manis 25gr',
                'sell_price' => 3000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 40),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Asam Jawa Kupas 25gr',
                'sell_price' => 2000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 41),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kelapa',
                'sell_price' => 12000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 42),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Jeruk',
                'sell_price' => 200,
                'unit_id' => 4,
                'code' => 'BB' . sprintf("%03d", 43),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kelapa Parut 250gr',
                'sell_price' => 12000,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 44),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kluwek',
                'sell_price' => 4000,
                'unit_id' => 4,
                'code' => 'BB' . sprintf("%03d", 45),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lengkuas Muda',
                'sell_price' => 4500,
                'unit_id' => 5,
                'code' => 'BB' . sprintf("%03d", 46),
                'type_id' => 3,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
