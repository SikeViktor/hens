<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hens;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // $user=User::factory()->create([
        //     'name' => 'Vityu',
        //     'email' => 'sikevityu@gmail.com',
        //     'password' => 'Dragon91'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Hens::factory(6)->create([
        //     'user_id' => $user->id
        // ]);

        // Hens::create([
        //     'name' => 'Tyúk1',
        //     'breed' => 'Itáliai keverék',
        //     'birth' => 2020,
        //     'description' => 'Barna búbos tyúk',
        //     'sex' => 'tyúk',
        //     'alive' => true
        // ]);
        // Hens::create([
        //     'name' => 'Tyúk2',
        //     'breed' => 'Itáliai keverék',
        //     'birth' => 2020,
        //     'description' => 'Fehér tyúk',
        //     'sex' => 'tyúk',
        //     'alive' => true
        // ]);
    }
}
