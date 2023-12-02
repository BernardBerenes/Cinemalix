<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Username' => 'admin',
            'Email' => 'admin@gmail.com',
            'Password' => Hash::make('admin'),
            'DOB' => date(now()),
            'Balance' => 0,
            'IsAdmin' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
