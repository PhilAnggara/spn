<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'nrp' => '1234567890',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'admin'
        ]);
        User::create([
            'name' => 'Pejabat Utama',
            'nrp' => '1234567891',
            'email' => 'pejabat@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'pejabat'
        ]);
        User::create([
            'name' => 'Instruktur Satu',
            'nrp' => '1234567892',
            'email' => 'instruktur.satu@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'instruktur'
        ]);
        User::create([
            'name' => 'Instruktur Dua',
            'nrp' => '1234567893',
            'email' => 'instruktur.dua@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'instruktur'
        ]);
        User::create([
            'name' => 'Instruktur Tiga',
            'nrp' => '1234567894',
            'email' => 'instruktur.tiga@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'instruktur'
        ]);
        User::create([
            'name' => 'Instruktur Empat',
            'nrp' => '1234567895',
            'email' => 'instruktur.empat@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'instruktur'
        ]);
    }
}
