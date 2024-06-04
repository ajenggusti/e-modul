<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materi')->insert([
            [
                'link_yt' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/PB0-CXA6Myw?si=sFFqVzoHl8ohzXpo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'file'=>'file',
                'materi'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel quia praesentium aperiam magnam? Laborum quo illo fuga sint laudantium aliquid?',
                'id_mapel'=>'1'
            ],
        ]);
    }
}
