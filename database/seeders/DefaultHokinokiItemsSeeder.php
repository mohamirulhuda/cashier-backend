<?php

namespace Database\Seeders;

use Database\Seeders\Default\{
    BeanTubersSeeder,
    CarbosSeeder,
    DrinksSeeder,
    FoodsSeeder,
    FruitsSeeder,
    ProteinsSeeder,
    SeasoningsSeeder,
    VegetablesSeeder
};
use Illuminate\Database\Seeder;

class DefaultHokinokiItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call all default items seeder

        $this->call(VegetablesSeeder::class);
        $this->call(FruitsSeeder::class);
        $this->call(SeasoningsSeeder::class);
        $this->call(ProteinsSeeder::class); 
        $this->call(FoodsSeeder::class);
        $this->call(DrinksSeeder::class);
        $this->call(CarbosSeeder::class);
        $this->call(BeanTubersSeeder::class);
    }
}
