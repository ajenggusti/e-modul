<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jawaban')->insert([
            [
                'jawaban' => 'a',
                'status'=>'benar',
                'id_user'=>'2',
                'id_materi'=>1,
                'id_post_test'=>'1'
            ],
        ]);
    }
}
