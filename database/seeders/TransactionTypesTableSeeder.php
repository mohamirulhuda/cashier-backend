<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_types')->insert([
            ['name' => 'Penjualan'],
            ['name' => 'Pembelian'],
            ['name' => 'Opname'],
            ['name' => 'Return']
        ]);
    }
}
