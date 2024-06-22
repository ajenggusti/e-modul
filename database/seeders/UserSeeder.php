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
            'name' => "guru",
            'email' => "guru@gmail.com",
            'password' => Hash::make('password'),
            'level' => "guru",
            'nomor_identitas' => "134098767890987656"
        ], [
            'name' => "siswa",
            'email' => "siswa@gmail.com",
            'password' => Hash::make('password'),
            'level' => "murid",
            'nomor_identitas' => "RPL-10"
        ]]);
    }
}
