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
                'nama_materi'=>'CSS',
                'link_yt' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/PB0-CXA6Myw?si=sFFqVzoHl8ohzXpo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'file'=>'file',
                'gambar'=>'Lorem ipsum dolor sit',
            ],
            [
                'nama_materi'=>'HTML',
                'link_yt' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/bWPMSSsVdPk?si=Uo1PLQ2Lun8Y6Mk2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'file'=>'file',
                'gambar'=>'Lorem ipsum dolor sit amet',
            ],
        ]);
    }
}
