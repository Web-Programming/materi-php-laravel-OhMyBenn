<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // insert data user
       DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
       ]);

         // insert data mahasiswa menggunakan query builder
        DB::table('_benn')->insert(
            [
            'npm' => '2022101010',
            'nama_mahasiswa' => 'Benn',
            'tempat_lahir' => 'Palembang',
            'tanggal_lahir' => '2006-08-28',
            'alamat' => 'Jl. HBR Motik',
            ]
        );
        //retrive all data
        Mahasiswa::all();
        Mahasiswa::where('id', '<', 3)->get(); //select * from mahasiswa where id < 3
        Mahasiswa::select(['npm','nama']
        );
    }
}
