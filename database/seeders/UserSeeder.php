<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Chatarine Caroline',
            'email' => 'chatarinecaroline@gmail.com',
            'password' => bcrypt('chatarine19'),
            'gender' => 'Female',
            'date_of_birth' => '2002-12-19',
            'country_id' => 1,
        ]);

        User::create([
            'name' => 'Alvindra Renaldo',
            'email' => 'alvindrarenaldo@gmail.com',
            'password' => bcrypt('alvindra07'),
            'gender' => 'Male',
            'date_of_birth' => '2002-06-07',
            'country_id' => 3,
        ]);

        User::create([
            'name' => 'Dewi Bulan Irene',
            'email' => 'dewibulanirene@gmail.com',
            'password' => bcrypt('dewi07'),
            'gender' => 'Male',
            'date_of_birth' => '2004-06-07',
            'country_id' => 2,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'gender' => 'Male',
            'role' => 'admin',
            'date_of_birth' => '2002-09-08',
            'country_id' => 5,
        ]);
    }
}
