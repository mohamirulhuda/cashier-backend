<?php

namespace Database\Seeders\Default;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitsSeeder extends Seeder
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
                'name' => 'Pisang Susu',
                'sell_price' => 25000,
                'code' => 'BU' . sprintf("%03d", 1), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Mas',
                'sell_price' => 25000,
                'code' => 'BU' . sprintf("%03d", 2), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Raja',
                'sell_price' => 35000,
                'code' => 'BU' . sprintf("%03d", 3), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Cavendish Sunpride Biasa',
                'sell_price' => 34000,
                'code' => 'BU' . sprintf("%03d", 4), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Cavendish Sunpride Premium',
                'sell_price' => 39000,
                'code' => 'BU' . sprintf("%03d", 5),  
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Kepok',
                'sell_price' => 26000,
                'code' => 'BU' . sprintf("%03d", 6), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Marlin',
                'sell_price' => 15000,
                'code' => 'BU' . sprintf("%03d", 7), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pisang Ambon',
                'sell_price' => 35000,
                'code' => 'BU' . sprintf("%03d", 8), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nanas Biasa',
                'sell_price' => 13000,
                'code' => 'BU' . sprintf("%03d", 9), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nanas Madu',
                'sell_price' => 20000,
                'code' => 'BU' . sprintf("%03d", 10), 
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Terong Belanda',
                'sell_price' => 22000,
                'code' => 'BU' . sprintf("%03d", 11),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Strawberry (Pack Kecil)',
                'sell_price' => 12500,
                'code' => 'BU' . sprintf("%03d", 12),
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Strawberry (Pack Sedang)',
                'sell_price' => 15500,
                'code' => 'BU' . sprintf("%03d", 13),
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Strawberry (Pack Besar)',
                'sell_price' => 18500,
                'code' => 'BU' . sprintf("%03d", 14),
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apel Merah',
                'sell_price' => 40000,
                'code' => 'BU' . sprintf("%03d", 15),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apel Ana',
                'sell_price' => 24000,
                'code' => 'BU' . sprintf("%03d", 16),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apel Fuji',
                'sell_price' => 42000,
                'code' => 'BU' . sprintf("%03d", 17),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apel Hijau Malang',
                'sell_price' => 35000,
                'code' => 'BU' . sprintf("%03d", 18),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alpukat Mentega Biasa',
                'sell_price' => 60000,
                'code' => 'BU' . sprintf("%03d", 19),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alpukat Mentega Premium',
                'sell_price' => 70000,
                'code' => 'BU' . sprintf("%03d", 20),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bengkoang',
                'sell_price' => 15000,
                'code' => 'BU' . sprintf("%03d", 21),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pepaya Biasa',
                'sell_price' => 9500,
                'code' => 'BU' . sprintf("%03d", 22),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pepaya California',
                'sell_price' => 15000,
                'code' => 'BU' . sprintf("%03d", 23),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buah Naga Merah',
                'sell_price' => 34000,
                'code' => 'BU' . sprintf("%03d", 24),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Salak Biasa',
                'sell_price' => 17000,
                'code' => 'BU' . sprintf("%03d", 25),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Salak Pondoh',
                'sell_price' => 20000,
                'code' => 'BU' . sprintf("%03d", 26),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Jember',
                'sell_price' => 26000,
                'code' => 'BU' . sprintf("%03d", 27),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Madu',
                'sell_price' => 35000,
                'code' => 'BU' . sprintf("%03d", 28),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Malang',
                'sell_price' => 21000,
                'code' => 'BU' . sprintf("%03d", 29),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Manis Iris',
                'sell_price' => 20000,
                'code' => 'BU' . sprintf("%03d", 30),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Ponkam',
                'sell_price' => 70000,
                'code' => 'BU' . sprintf("%03d", 31),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Peras',
                'sell_price' => 15000,
                'code' => 'BU' . sprintf("%03d", 32),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Baby Pacitan',
                'sell_price' => 2000,
                'code' => 'BU' . sprintf("%03d", 33),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Santang',
                'sell_price' => 50000,
                'code' => 'BU' . sprintf("%03d", 34),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Peras',
                'sell_price' => 18000,
                'code' => 'BU' . sprintf("%03d", 35),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jeruk Keprok',
                'sell_price' => 32000,
                'code' => 'BU' . sprintf("%03d", 36),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pir Biasa',
                'sell_price' => 30000,
                'code' => 'BU' . sprintf("%03d", 37),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pir Madu',
                'sell_price' => 40000,
                'code' => 'BU' . sprintf("%03d", 38),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Melon',
                'sell_price' => 18000,
                'code' => 'BU' . sprintf("%03d", 39),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Blewah',
                'sell_price' => 14000,
                'code' => 'BU' . sprintf("%03d", 40),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggur Merah',
                'sell_price' => 40000,
                'code' => 'BU' . sprintf("%03d", 41),
                'type_id' => 2,
                'unit_id' => 4,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jambu Air',
                'sell_price' => 18000,
                'code' => 'BU' . sprintf("%03d", 42),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jambu Kristal',
                'sell_price' => 24000,
                'code' => 'BU' . sprintf("%03d", 43),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jambu Biji Merah',
                'sell_price' => 20000,
                'code' => 'BU' . sprintf("%03d", 44),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kelengkeng Impor Biasa',
                'sell_price' => 60000,
                'code' => 'BU' . sprintf("%03d", 45),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kelengkeng Impor Super',
                'sell_price' => 64000,
                'code' => 'BU' . sprintf("%03d", 46),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Semangka',
                'sell_price' => 12000,
                'code' => 'BU' . sprintf("%03d", 47),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mangga Muda',
                'sell_price' => 28000,
                'code' => 'BU' . sprintf("%03d", 48),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mangga Manalagi',
                'sell_price' => 30000,
                'code' => 'BU' . sprintf("%03d", 49),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mangga Pakel',
                'sell_price' => 25000,
                'code' => 'BU' . sprintf("%03d", 50),
                'type_id' => 2,
                'unit_id' => 5,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mangga Gadung',
                'sell_price' => 30000,
                'code' => 'BU' . sprintf("%03d", 51),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kiwi',
                'sell_price' => 15000,
                'code' => 'BU' . sprintf("%03d", 52),
                'type_id' => 2,
                'unit_id' => 5,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Belimbing',
                'sell_price' => 35000,
                'code' => 'BU' . sprintf("%03d", 53),
                'type_id' => 2,
                'unit_id' => 5,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Leci Madu 4ons',
                'sell_price' => 40000,
                'code' => 'BU' . sprintf("%03d", 54),
                'type_id' => 2,
                'unit_id' => 5,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delima',
                'sell_price' => 40000,
                'code' => 'BU' . sprintf("%03d", 55),
                'type_id' => 2,
                'unit_id' => 1,
                'purchase_price' => 0,
                'stock' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
