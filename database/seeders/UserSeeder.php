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
            'nrp' => '12345678910',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'admin'
        ]);
        User::create([
            'name' => 'Pejabat Utama',
            'nrp' => '12345678911',
            'email' => 'pejabat@gmail.com',
            'password' => Hash::make('Admin123'),
            'level' => 'pejabat'
        ]);
        User::create([
            'name' => 'Pengguna Biasa',
            'nrp' => '12345678912',
            'email' => 'penggunabiasa@gmail.com',
            'password' => Hash::make('Admin123')
        ]);
    }
}
