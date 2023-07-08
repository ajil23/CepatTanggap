<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Petugas',
                'email'=>'petugas@email.com',
                'role'=>'1',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'Pasien',
                'email'=>'pasien@email.com',
                'role'=>'0',
                'password'=>bcrypt('12345678')
            ],
        ];

        foreach ($userData as $key => $val ){
            User::create($val);
        }
    }
}
