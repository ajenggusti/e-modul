<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapel')->insert([
            [
                'mapel' => 'TKJ',
                'gambar'=>'file',
                'id_user'=>'2'
            ],
        ]);
    }
}

