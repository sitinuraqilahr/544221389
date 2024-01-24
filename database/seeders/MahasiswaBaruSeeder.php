<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programstudi')->insert([
            'ProgramStudiID'=> '544221',
            'NamaProgramStudi'=> 'teknik Komputer dan Jaringan',
           ]);
           DB::table('_calon_mahasiswa')->insert([
            'CalonMahasiswaID'=> '544221',
            'NamaDepan'=> 'ST.Nur Aqila',
            'NamaBelakang'=>'Ramadhanty',
            'Email'=>'aqilaqila@gmail.com',
            'Alamat'=> 'JL.Pendidikan blok A/98',
            'Telepon'=> '0822-9867-5324',
            'TanggalLahir'=> '2000-03-18',
           ]);
           DB::table('_pendaftaran')->insert([
            'PendaftaranID'=> '544221',
            'CalonMahasiswaID'=> '544221',
            'TanggalPendaftaran'=> '2024-01-24',
            'StatusPendaftaran'=> 'LULUS',
           ]);
           DB::table('_nilai_ujian')->insert([
            'NilaiUjianID'=> '544221',
            'CalonMahasiswa'=> '544221',
            'JenisUjian'=> 'Lisan',
            'Nilai'=> '100,0',
           ]);
        //
    }
}
