<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Bucuresti',
        ]);

        DB::table('cities')->insert([
            'name' => 'Cluj',
        ]);

        DB::table('cities')->insert([
            'name' => 'Timisoara',
        ]);

        DB::table('cities')->insert([
            'name' => 'Iasi',
        ]);
    }
}
