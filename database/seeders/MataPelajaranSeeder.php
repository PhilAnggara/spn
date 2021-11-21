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
            'nama_mapel' => 'FT Reserse',
        ]);
        MataPelajaran::create([
            'nama_mapel' => 'FT Sabara',
        ]);
        MataPelajaran::create([
            'nama_mapel' => 'FT BINMAS',
        ]);
        MataPelajaran::create([
            'nama_mapel' => 'FT INTELKAM',
        ]);
    }
}
