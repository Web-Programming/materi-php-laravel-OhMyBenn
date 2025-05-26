<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('87654321'),
            'level' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'level' => 'user',
        ]);

        DB::table('users')->insert([
            'name' => 'Dosen',
            'email' => 'dosen@gmail.com',
            'password' => Hash::make('23456789'),
            'level' => 'dosen',
        ]);

        DB::table('users')->insert([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('34567890'),
            'level' => 'mahasiswa',
        ]);
    }
}
