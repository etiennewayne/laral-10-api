<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::insertOrIgnore(
        //     [
        //         'name' => 'Etienne Wayne',
        //         'email' => 'test@example.com',
        //         'password' => Hash::make('a')
        //     ],
        //     [
        //         'name' => 'Juan Dela Cruz',
        //         'email' => 'juan@example.com',
        //         'password' => Hash::make('a')
        //     ],
        // );

        $this->call([
            UserSeeder::class,
        ]);
    }
}
