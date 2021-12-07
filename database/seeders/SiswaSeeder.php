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
            'id_ta' => 5,
            'no_siswa' => '349872397',
            'nama' => 'Exer Maratade',
            'tempat_lahir' => 'Talaud',
            'tanggal_lahir' => Carbon::parse('1999-01-01'),
            'peleton' => '1',
            'kompi' => 'A',
            'foto' => 'examples/example.png'
        ]);
        Siswa::create([
            'id_ta' => 5,
            'no_siswa' => '349872398',
            'nama' => 'Serwin Sumagit',
            'tempat_lahir' => 'Manado',
            'tanggal_lahir' => Carbon::parse('1999-01-01'),
            'peleton' => '4',
            'kompi' => 'B',
            'foto' => 'examples/example.png'
        ]);
        Siswa::create([
            'id_ta' => 5,
            'no_siswa' => '349872399',
            'nama' => 'Risaldi Ladohuru',
            'tempat_lahir' => 'Tompaso',
            'tanggal_lahir' => Carbon::parse('1999-01-01'),
            'peleton' => '3',
            'kompi' => 'C'
        ]);
    }
}
