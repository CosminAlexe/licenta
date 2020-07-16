<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cosmin Alexe',
            'email' => 'alexe.cosmin.97@gmail.com',
            'phone_number' => '0723232323',
            'password' => Hash::make('Password123'),
            'picture' => '/images/studentProfile/user1.jpg',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Robert Alexe',
            'email' => 'alexe.robert.97@gmail.com',
            'phone_number' => '0723232324',
            'password' => Hash::make('Password123'),
            'picture' => '/images/studentProfile/user2.jpg',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Student Profile 3',
            'email' => 'student3@gmail.com',
            'phone_number' => '0723232325',
            'password' => Hash::make('Password123'),
            'picture' => '/images/studentProfile/user3.jpg',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Student Profile 4',
            'email' => 'student4@gmail.com',
            'phone_number' => '0723232325',
            'password' => Hash::make('Password123'),
            'picture' => '/images/studentProfile/user4.jpg',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Student Profile 5',
            'email' => 'student5@gmail.com',
            'phone_number' => '0723232326',
            'password' => Hash::make('Password123'),
            'picture' => '/images/studentProfile/user5.jpg',
            'user_type_id' => 1,
        ]);


        DB::table('users')->insert([
            'name' => 'Angajator SRL',
            'email' => 'angajator1@gmail.com',
            'phone_number' => '0723232327',
            'password' => Hash::make('Password123'),
            'picture' => '/images/companyLogo/company_logo1.jpg',
            'user_type_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'AVT Employer',
            'email' => 'angajator2@gmail.com',
            'phone_number' => '0723232328',
            'password' => Hash::make('Password123'),
            'picture' => '/images/companyLogo/company_logo2.jpg',
            'user_type_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'TULR Employer',
            'email' => 'angajator3@gmail.com',
            'phone_number' => '0723232329',
            'password' => Hash::make('Password123'),
            'picture' => '/images/companyLogo/company_logo3.jpg',
            'user_type_id' => 2,
        ]);
    }
}
