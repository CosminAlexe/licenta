<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internships')->insert([
            'title' => 'Web Developer in PHP',
            'small_description' => 'Internship in PHP cu Laravel',
            'description' => 'Compania Angajator1 are o echipa de oameni foarte bine pregatiti care sunt gata sa te ajute si sa te invete tainele programarii.',
            'requirements' => 'Cunostinte de Programare',
            'start_date' => Carbon::parse('08/08/2020'),
            'end_date' => Carbon::parse('08/09/2020'),
            'salary' => 1800,
            'user_id' => 3,
            'category_id' => 1,
            'city_id' => 1,
        ]);

        DB::table('internships')->insert([
            'title' => 'HR Specialist',
            'small_description' => 'Internship in HR',
            'description' => 'Compania Angajator1 are o echipa de oameni foarte bine pregatiti care sunt gata sa te ajute si sa te invete tainele HR-ului.',
            'requirements' => 'Sociabilitate si dorinta de munca',
            'start_date' => Carbon::parse('08/08/2020'),
            'end_date' => Carbon::parse('08/09/2020'),
            'salary' => 1200,
            'user_id' => 3,
            'category_id' => 4,
            'city_id' => 1,
        ]);

        DB::table('internships')->insert([
            'title' => 'HR Specialist',
            'small_description' => 'Internship in HR',
            'description' => 'Compania Angajator1 are o echipa de oameni foarte bine pregatiti care sunt gata sa te ajute si sa te invete tainele HR-ului.',
            'requirements' => 'Sociabilitate si dorinta de munca',
            'start_date' => Carbon::parse('08/08/2020'),
            'end_date' => Carbon::parse('08/09/2020'),
            'salary' => 1200,
            'user_id' => 3,
            'category_id' => 4,
            'city_id' => 2,
        ]);

    }
}
