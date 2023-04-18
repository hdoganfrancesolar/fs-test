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
            'name' => 'france-solar',
            'email' => 'france-solar@france-solar.fr',
            'password' => bcrypt('password')
        ]);
    }
}
