<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'nama' => "guru",
            'email' => "guru@gmail.com",
            'password' => Hash::make('password'),
            'level'=>"guru",
            'absen'=>null,
            'nip'=>"1990081720200410"
        ],[
            'nama' => "siswa",
            'email' => "siswa@gmail.com",
            'password' => Hash::make('password'),
            'level'=>"murid",
            'absen'=>"RPL-1",
            'nip'=>null
        ]]);
    }
}
