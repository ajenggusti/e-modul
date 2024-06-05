<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            MapelSeeder::class,
            NilaiSeeder::class,
            MateriSeeder::class,
            FeedbackSeeder::class,
            PosttestSeeder::class,
            JawabanSeeder::class,
            PretestSeeder::class,
        ]);
    }
}
