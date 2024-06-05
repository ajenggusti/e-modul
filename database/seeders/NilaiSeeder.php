<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai')->insert([
            [
                'nilai' => "90",
                'id_materi'=>1,
                'id_user'=>2,
            ],
        ]);
    }
}

