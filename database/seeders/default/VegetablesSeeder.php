<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetablesSeeder extends Seeder
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
                'name' => 'Jamur Salju 50-65gr',
                'sell_price' => 12900,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 1),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Parsley 250gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 2),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Labu Jepang/Kabocha 1kg',
                'sell_price' => 30000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 3),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sawi Asin 500gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 4),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kecombrang',
                'sell_price' => 25000,
                'unit_id' => 4,
                'code' => 'SY' . sprintf("%03d", 5),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Kol/Cuciwis 250gr',
                'sell_price' => 4000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 6),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kacang Panjang 500gr',
                'sell_price' => 8000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 7),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lamtoro',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 8),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Kelor 250gr',
                'sell_price' => 11000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 9),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Sentir 250gr',
                'sell_price' => 8000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 10),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Asparagus',
                'sell_price' => 26000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 11),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tomat Cherry 500gr',
                'sell_price' => 21000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 12),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kailan 250gr',
                'sell_price' => 7500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 13),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Green Romain Value',
                'sell_price' => 15000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 14),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jamur Enoki',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 15),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bunga Pepaya 250gr',
                'sell_price' => 8000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 16),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kulit Melinjo 1kg',
                'sell_price' => 20000,
                'unit_id' => 1,
                'code' => 'SY' . sprintf("%03d", 17),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pare 500gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 18),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pakis 300gr',
                'sell_price' => 8500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 19),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pete',
                'sell_price' => 6500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 20),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terong Lalap Ungu 250gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 21),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terong Lalap Hijau 250gr',
                'sell_price' => 4500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 22),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terong Ungu Manis 650-700gr',
                'sell_price' => 13000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 23),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terong Sayur Hijau 250-300gr',
                'sell_price' => 5500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 24),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Timun Jawa 450-500gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 25),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tomat Buah 250gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 26),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tomat Sayur 250gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 27),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wortel Biasa/Sayur 250gr',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 28),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wortel Lokal 250gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 29),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wortel Manis Impor 500gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 30),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kapri Manis 250gr',
                'sell_price' => 20000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 31),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tauge Panjang 150gr',
                'sell_price' => 3500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 32),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tauge Pendek 100gr',
                'sell_price' => 3000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 33),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jamur Tiram 200gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 34),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jamur Kuping Basah 250gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 35),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jamur Kuping Kering 100gr',
                'sell_price' => 10500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 36),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kangkung 250gr',
                'sell_price' => 4000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 37),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kol Merah 300gr',
                'sell_price' => 12000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 38),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rebung Kupas 500gr',
                'sell_price' => 16000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 39),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tewel 300-350gr',
                'sell_price' => 8000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 40),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Oyong/Gambas 250gr',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 41),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Akar Alang-alang',
                'sell_price' => 11500,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 42),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Selada Keriting/Andewi 250gr',
                'sell_price' => 8000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 43),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Manisa Hijau Tua 500-550gr',
                'sell_price' => 5500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 44),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Manisa Putih 325gr',
                'sell_price' => 4000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 45),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Siomak/Selada wangi 250gr',
                'sell_price' => 6500,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 46),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kucai Bulk 250gr',
                'sell_price' => 3500,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 47),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Timun Jepang Kyuri 300-350gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 48),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Zucchini 300-350gr',
                'sell_price' => 11500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 49),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Kailan 250gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 50),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Iceberg Lettuce 300-350gr',
                'sell_price' => 13000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 51),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pepino 200gr',
                'sell_price' => 6500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 52),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Timun 250gr',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 53),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Belimbing Sayur 250gr',
                'sell_price' => 5000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 54),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lidah Buaya',
                'sell_price' => 9000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 55),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Okra Hijau 250gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 56),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Manisa 500gr',
                'sell_price' => 11500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 57),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jamur Kancing 250gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 58),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Lemon Lokal 500gr',
                'sell_price' => 25000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 59),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Lemon Impor 500gr',
                'sell_price' => 36000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 60),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Pecel/Nipis 250gr',
                'sell_price' => 7000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 61),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Sambal/Limau 225-250gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 62),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kapri 250gr',
                'sell_price' => 12000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 63),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kentang Besar 500gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 64),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kol/Kubis 500-550gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 65),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lobak Putih 300-400gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 66),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paprika Kuning 150-200gr',
                'sell_price' => 13000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 67),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paprika Hijau 150-200gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 68),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paprika Merah 150-200gr',
                'sell_price' => 11500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 69),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sawi Hijau 250-300gr',
                'sell_price' => 5000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 70),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sawi Putih 500-550gr',
                'sell_price' => 8500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 71),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sawi Pakcoy/Sendok 500-550gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 72),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Selada Air 300gr',
                'sell_price' => 4000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 73),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terong Ungu Sayur 500-600gr',
                'sell_price' => 6000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 74),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Corn 250gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 75),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Brokoli Sedang 250-350gr',
                'sell_price' => 10000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 76),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Buncis 250gr',
                'sell_price' => 13000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 77),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buncis 250gr',
                'sell_price' => 6500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 78),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Belalo 250gr',
                'sell_price' => 8000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 79),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bunga Kol Sedang 350-450gr',
                'sell_price' => 9500,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 80),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Bawang 250gr',
                'sell_price' => 6000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 81),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Bayam 250-350gr',
                'sell_price' => 8000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 82),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bayam Merah 250gr',
                'sell_price' => 5500,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 83),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Mint 100gr',
                'sell_price' => 6000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 84),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Kemangi 50gr',
                'sell_price' => 3000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 85),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Salam',
                'sell_price' => 2000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 86),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Kenikir 250-300gr',
                'sell_price' => 4000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 87),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Ketela 200gr',
                'sell_price' => 6500,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 88),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Pepaya 250-300gr',
                'sell_price' => 5000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 89),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Pisang',
                'sell_price' => 6000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 90),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daun Pandan',
                'sell_price' => 3500,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 91),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Seledri 100gr',
                'sell_price' => 4000,
                'unit_id' => 6,
                'code' => 'SY' . sprintf("%03d", 92),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jagung Manis',
                'sell_price' => 13000,
                'unit_id' => 5,
                'code' => 'SY' . sprintf("%03d", 93),
                'type_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
