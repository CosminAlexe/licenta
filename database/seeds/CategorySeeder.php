<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Web Developer',
        ]);

        DB::table('categories')->insert([
            'name' => 'Cloud Computing',
        ]);

        DB::table('categories')->insert([
            'name' => 'Cybersecurity',
        ]);

        DB::table('categories')->insert([
            'name' => 'Non-Tech',
        ]);
    }
}
