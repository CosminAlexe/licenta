<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternshipStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internship_student')->insert([
            'internship_id' => 2,
            'user_id' => 1,
            'status' => 'ai aplicat,'
        ]);

        DB::table('internship_student')->insert([
            'internship_id' => 3,
            'user_id' => 1,
            'status' => 'ai aplicat'
        ]);
    }
}
