<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommoditiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
        for ($i = 0; $i < 15; $i++) {
            DB::table('commodities')->insert([
                'name' => $faker->unique()->fruitName,
                'code' => $faker->bothify('BU##'),
                'type_id' => 2,
                'unit_id' => $faker->numberBetween(1,4),
                'sell_price' => $faker->numerify('##00'),
                'purchase_price' => $faker->numerify('##00'),
                'stock' => $faker->numerify('##'),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            DB::table('commodities')->insert([
                'name' => $faker->unique()->vegetableName,
                'code' => $faker->bothify('SY##'),
                'type_id' => 2,
                'unit_id' => $faker->numberBetween(1,4),
                'sell_price' => $faker->numerify('##00'),
                'purchase_price' => $faker->numerify('##00'),
                'stock' => $faker->numerify('##'),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('commodities')->insert([
                'name' => $faker->unique()->sauceName,
                'code' => $faker->bothify('BM##'),
                'type_id' => 3,
                'unit_id' => $faker->numberBetween(1,4),
                'sell_price' => $faker->numerify('##00'),
                'purchase_price' => $faker->numerify('##00'),
                'stock' => $faker->numerify('##'),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
