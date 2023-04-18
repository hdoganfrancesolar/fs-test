<?php

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
            'name' => 'admin',
            'email' => 'admin@france-solar.fr',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@france-solar.fr',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@france-solar.fr',
            'password' => bcrypt('password')
        ]);
    }
}
