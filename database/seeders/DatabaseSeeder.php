<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(CustomersSeeder::class);
        // $this->call(CommodityTypesSedder::class);
        $this->call(CommodityUnitsSeeder::class);
        $this->call(CommoditiesSeeder::class);
        $this->call(TransactionTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
