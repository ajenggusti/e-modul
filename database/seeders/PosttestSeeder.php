<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PosttestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posttest')->insert([
            [
                'pertanyaan' => "Apa itu apel?",
                'a'=>"apel adalah buah",
                'b'=>"apel adalah hewan",
                'c'=>"apel adalah tumbuhan",
                'd'=>"apel adalah manusia",
                'e'=>"apel adalah benda",
                'kunci'=> "a",
                'id_materi'=>1
            ],
        ]);
    }
}
