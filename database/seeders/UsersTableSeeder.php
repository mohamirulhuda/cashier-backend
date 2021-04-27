<?php

namespace Database\Seeders;

use App\Models\User;
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

        ]);
    }
}
