<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        
        for ($i = 0 ; $i < 20 ; $i++) {
            DB::table('customers')->insert([
                'name' => $faker->name,
                'contact_1' => $faker->phoneNumber,
                'contact_2' => $faker->phoneNumber,
                'address' => $faker->address,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
