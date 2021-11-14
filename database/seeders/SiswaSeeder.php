<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'no_siswa' => '349872398',
            'nama' => 'Exer Maratade',
            'tempat_lahir' => 'Talaud',
            'tanggal_lahir' => Carbon::parse('1999-01-01'),
            'peleton' => 'IV',
            'kompi' => 'A',
            'tahun_angkatan' => '2020',
        ]);
        Siswa::create([
            'no_siswa' => '349872399',
            'nama' => 'Serwin Sumagit',
            'tempat_lahir' => 'Manado',
            'tanggal_lahir' => Carbon::parse('1999-01-01'),
            'peleton' => 'V',
            'kompi' => 'B',
            'tahun_angkatan' => '2020',
        ]);
    }
}
