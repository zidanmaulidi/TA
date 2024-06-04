<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomisiliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('domisilis')->insert([
            [
                'id' => 1,
                'domisili' => 'RT 10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'domisili' => 'RT 11',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
