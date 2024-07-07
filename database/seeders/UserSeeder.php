<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Mayesel',
                'email' => 'mayesel@dev.com',
                'password' => Hash::make('a')
            ],
            [
                'name' => 'Etienne Wayne',
                'email' => 'etienne@dev.com',
                'password' => Hash::make('a')
            ]
     
        ];

        \App\Models\User::insertOrIgnore($data);
    }
}
