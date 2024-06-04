<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class levelseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level_users')->insert([
            [
                'id' => 1,
                'level_kode' => 'SU',
                'level_nama' => 'SuperUser',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'level_kode' => 'W',
                'level_nama' => 'RW',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'level_kode' => 'T',
                'level_nama' => 'RT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'level_kode' => 'PGS',
                'level_nama' => 'Pengurus',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'level_kode' => 'WG',
                'level_nama' => 'warga',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
