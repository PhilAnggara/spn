<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataPelajaran::create([
            'id_ta' => 5,
            'id_instruktur' => 3,
            'nama_mapel' => 'FT Reserse',
        ]);
        MataPelajaran::create([
            'id_ta' => 5,
            'id_instruktur' => 3,
            'nama_mapel' => 'FT Sabara',
        ]);
        MataPelajaran::create([
            'id_ta' => 5,
            'id_instruktur' => 4,
            'nama_mapel' => 'FT BINMAS',
        ]);
        MataPelajaran::create([
            'id_ta' => 5,
            'id_instruktur' => 5,
            'nama_mapel' => 'FT INTELKAM',
        ]);
    }
}
