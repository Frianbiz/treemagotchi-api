<?php

use Illuminate\Database\Seeder;

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
            'name' => 'gro',
            'latitude' => 48.68338749999999,
            'longitude' => 2.2056852000000617,
        ]);

        DB::table('users')->insert([
            'name' => 'efa',
            'latitude' => 48.862725,
            'longitude' => 2.287592000000018,
        ]);

        DB::table('users')->insert([
            'name' => 'lle',
            'latitude' => 48.687334,
            'longitude' => 2.199326,
        ]);
    }
}
