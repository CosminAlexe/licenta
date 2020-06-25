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
            'password' => Hash::make('Password123'),
            'picture' => '/images/backgrounds/user_bg1.png',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Robert Alexe',
            'email' => 'alexe.robert.97@gmail.com',
            'password' => Hash::make('Password123'),
            'picture' => '/images/backgrounds/user_bg1.png',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Angajator 1',
            'email' => 'angajator1@gmail.com',
            'password' => Hash::make('Password123'),
            'picture' => '/images/backgrounds/user_bg3.jpg',
            'user_type_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Angajator 2',
            'email' => 'angajator2@gmail.com',
            'password' => Hash::make('Password123'),
            'picture' => '/images/backgrounds/user_bg2.jpg',
            'user_type_id' => 2,
        ]);
    }
}
