<?php

namespace Database\Seeders;

use App\Models\TahunAngkatan;
use Illuminate\Database\Seeder;

class TahunAngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TahunAngkatan::create([
            'ta' => '2017',
            'aktif' => false
        ]);
        TahunAngkatan::create([
            'ta' => '2018',
            'aktif' => false
        ]);
        TahunAngkatan::create([
            'ta' => '2019',
            'aktif' => false
        ]);
        TahunAngkatan::create([
            'ta' => '2020',
            'aktif' => false
        ]);
        TahunAngkatan::create([
            'ta' => '2021',
            'aktif' => true
        ]);
    }
}
