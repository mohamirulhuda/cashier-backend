<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Developer',
                'username' => 'devops',
                'password' => bcrypt('p4ssw0rd')
            ],
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('p4ssw0rd')
            ],
            // [
            //     'name' => 'Mohammad Amirul Huda',
            //     'username' => 'amirul1997',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'name' => 'Nokie Pratama Putra',
            //     'username' => 'noknok19',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'name' => 'Vie Trimey',
            //     'username' => 'cia1234',
            //     'password' => bcrypt('password')
            // ],

        ]);
    }
}
