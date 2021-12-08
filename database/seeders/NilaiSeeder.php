<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '1',
            'tugas_kelas' => '100',
            'tugas_individu' => '100',
            'praktikum' => '100',
            'mental' => '100',
            'uas' => '100',
            'nilai' => '100',
        ]);
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '2',
            'tugas_kelas' => '100',
            'tugas_individu' => '100',
            'praktikum' => '100',
            'mental' => '100',
            'uas' => '100',
            'nilai' => '100',
        ]);
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '3',
            'tugas_kelas' => '100',
            'tugas_individu' => '100',
            'praktikum' => '100',
            'mental' => '100',
            'uas' => '100',
            'nilai' => '100',
        ]);
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '4',
            'tugas_kelas' => '100',
            'tugas_individu' => '100',
            'praktikum' => '100',
            'mental' => '100',
            'uas' => '100',
            'nilai' => '100',
        ]);
        Nilai::create([
            'id_siswa' => '2',
            'id_mapel' => '1',
            'tugas_kelas' => '100',
            'tugas_individu' => '100',
            'praktikum' => '100',
            'mental' => '100',
            'uas' => '100',
            'nilai' => '100',
        ]);
        // Nilai::create([
        //     'id_siswa' => '2',
        //     'id_mapel' => '3',
        //     'tugas_kelas' => '100',
        //     'tugas_individu' => '100',
        //     'praktikum' => '100',
        //     'mental' => '100',
        //     'uas' => '100',
        //     'nilai' => '100',
        // ]);
    }
}
