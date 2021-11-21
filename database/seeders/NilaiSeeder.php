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
            'nilai' => '80',
        ]);
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '2',
            'nilai' => '85',
        ]);
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '3',
            'nilai' => '75',
        ]);
        Nilai::create([
            'id_siswa' => '1',
            'id_mapel' => '4',
            'nilai' => '90',
        ]);
        Nilai::create([
            'id_siswa' => '2',
            'id_mapel' => '1',
            'nilai' => '70',
        ]);
        Nilai::create([
            'id_siswa' => '2',
            'id_mapel' => '3',
            'nilai' => '80',
        ]);
    }
}
