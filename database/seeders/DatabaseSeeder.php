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
        // \App\Models\User::factory(10)->create();

        \App\Models\Administrator::factory()->create([
            "nama" => fake()->name(),
            "username" => "admin",
            "type" => "admin",
            "password" => bcrypt("password")
        ]);
        $this->call([
            DataDosenSeeder::class,
            DataMahasiswaSeeder::class
        ]);
    }
}
