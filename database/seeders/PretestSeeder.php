<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PretestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pretest')->insert([
            [
                'jawaban' => "jawaban 1 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, consequatur! Lorem ipsum dolor sit amet.",
                'id_user' => "1",
                'id_materi' => "1",
            ],
        ]);
    }
}
