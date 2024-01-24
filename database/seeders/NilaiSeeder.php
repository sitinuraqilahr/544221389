<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_nilai_ujian')->insert([
            'NilaiUjianID' => '544221',
            'CalonMahasiswaID' => '544221',
            'JenisUjian' => 'Lisan',
            'Nilai' => '100.0',
           ]);
    }
}
