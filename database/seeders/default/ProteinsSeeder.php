<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProteinsSeeder extends Seeder
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
                'name' => 'Tempe (Pack Kecil)',
                'sell_price' => 6000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 1),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tempe (Pack Besar)',
                'sell_price' => 11000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 2),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tahu Susu (Pack Kecil)',
                'sell_price' => 12000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 3),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tahu Susu (Pack Besar)',
                'sell_price' => 15000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 4),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tahu Kuning (5)',
                'sell_price' => 13000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 5),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tahu Biasa(2,5)',
                'sell_price' => 6000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 6),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam (Daging/Paha/Dada) 250gr',
                'sell_price' => 10000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 7),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam (Ceker) 250gr',
                'sell_price' => 7000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 8),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam (Kepala) 250gr',
                'sell_price' => 7000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 9),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam (Sayap) 250gr',
                'sell_price' => 10000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 10),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam (Hati Ampela) 250gr',
                'sell_price' => 11000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 11),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam (Fillet Dada) 500gr',
                'sell_price' => 19000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 12),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam Broiler (Utuh)',
                'sell_price' => 55000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 13),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ayam Kampung (Utuh)',
                'sell_price' => 75000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 14),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pindang Biasa (Kecil)',
                'sell_price' => 8000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 15),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pindang Biasa (Besar)',
                'sell_price' => 12500,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 16),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pindang Salem',
                'sell_price' => 15500,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 17),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Nila 500gr',
                'sell_price' => 21000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 18),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Salem 500gr',
                'sell_price' => 23000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 19),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tuna Sirip Kuning 1kg',
                'sell_price' => 50000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 20),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tuna Yupi 500gr',
                'sell_price' => 23000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 21),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buntut Merah 500gr',
                'sell_price' => 19000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 22),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Bawal 500gr',
                'sell_price' => 18000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 23),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Gurame 1kg',
                'sell_price' => 39000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 24),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Lele 500gr',
                'sell_price' => 13000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 25),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Kutuk 500gr',
                'sell_price' => 35000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 26),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Patin 1kg',
                'sell_price' => 30000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 27),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Mujair 1kg',
                'sell_price' => 40000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 28),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Tongkol Cakalan 1kg',
                'sell_price' => 42000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 29),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Udang Kecil 250gr',
                'sell_price' => 25000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 30),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Udang Sedang 250gr',
                'sell_price' => 27000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 31),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Udang Besar 250gr',
                'sell_price' => 29000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 32),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Baby Cumi 500gr',
                'sell_price' => 38000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 33),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cumi-Cumi 250gr',
                'sell_price' => 25000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 34),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Telur Ayam',
                'sell_price' => 17000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 35),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Telur Ayam Kampung',
                'sell_price' => 50000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 36),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Telur Puyuh Mentah 250gr',
                'sell_price' => 9000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 37),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Telur Asin Matang',
                'sell_price' => 4500,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 38),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hati Sapi 500gr',
                'sell_price' => 45000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 39),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paru Sapi 500gr',
                'sell_price' => 45000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 40),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Iga Sapi 500gr',
                'sell_price' => 47000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 41),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daging Sapi 500gr',
                'sell_price' => 67000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 42),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kikil Sapi 500gr',
                'sell_price' => 50000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 43),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tetelan 500gr',
                'sell_price' => 47000,
                'unit_id' => 4,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 44),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daging Lulur Dalam 500gr',
                'sell_price' => 68000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 45),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kerang Hijau 250gr',
                'sell_price' => 12000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 46),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kerang Dara 500gr',
                'sell_price' => 18500,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 47),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kerang Simping 500gr',
                'sell_price' => 22000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 48),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Bandeng Besar 1kg',
                'sell_price' => 40000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 49),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Bandeng Kecil 500gr',
                'sell_price' => 16000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 50),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Wader 500gr',
                'sell_price' => 18000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 51),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Kembung 500gr',
                'sell_price' => 25000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 52),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Kakap 1kg',
                'sell_price' => 80000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 53),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Dorang 500gr',
                'sell_price' => 37000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 54),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Tengiri 1kg',
                'sell_price' => 85000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 55),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kepiting 1kg',
                'sell_price' => 110000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 56),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Salmon 1kg',
                'sell_price' => 54000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 57),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Sarden 1kg',
                'sell_price' => 40000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 58),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Cucut 1kg',
                'sell_price' => 39000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 59),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Cucut Besar 1kg',
                'sell_price' => 55000,
                'unit_id' => 1,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 60),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Layur 500gr',
                'sell_price' => 32000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 61),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ikan Kerapu 500gr',
                'sell_price' => 27000,
                'unit_id' => 5,
                'type_id' => 3,
                'code' => 'PR' . sprintf("%03d", 62),
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
