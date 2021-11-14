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
            'name' => 'Nama Admin',
            'nrp' => '23094735',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin123')
        ]);
    }
}
