<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_profiles')->insert([
            'user_id' => 1,
        ]);

        DB::table('student_profiles')->insert([
            'user_id' => 2,
        ]);
    }
}
