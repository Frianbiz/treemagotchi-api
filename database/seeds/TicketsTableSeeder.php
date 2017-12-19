<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'impact' => '253',
            'user_id' => 1,
        ]);

        DB::table('tickets')->insert([
            'impact' => '140',
            'user_id' => 1,
        ]);

        DB::table('tickets')->insert([
            'impact' => '300',
            'user_id' => 1,
        ]);

        DB::table('tickets')->insert([
            'impact' => '201',
            'user_id' => 2,
        ]);

        DB::table('tickets')->insert([
            'impact' => '100',
            'user_id' => 2,
        ]);

        DB::table('tickets')->insert([
            'impact' => '462',
            'user_id' => 2,
        ]);

        DB::table('tickets')->insert([
            'impact' => '430',
            'user_id' => 2,
        ]);

        DB::table('tickets')->insert([
            'impact' => '342',
            'user_id' => 3,
        ]);

        DB::table('tickets')->insert([
            'impact' => '340',
            'user_id' => 3,
        ]);

        DB::table('tickets')->insert([
            'impact' => '430',
            'user_id' => 3,
        ]);
    }
}
