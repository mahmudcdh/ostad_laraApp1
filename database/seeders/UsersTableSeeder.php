<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            // Admin Data
        [
            'name' => 'Site Admin',
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678'),
            'phone' => '01817799770',
            'address' => 'Site Admin Address',
            'role' => 'admin',
            'status' => 'active',
        ],
            // User Data
        [
            'name' => 'Site User',
            'username' => 'user',
            'email' => 'user@email.com',
            'password' => Hash::make('12345678'),
            'phone' => '01716133115',
            'address' => 'Site User Address',
            'role' => 'user',
            'status' => 'inactive',
        ],

        ]);
    }
}
