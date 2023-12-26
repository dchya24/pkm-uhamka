<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penilai>
 */
class PenilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama" => fake()->name(),
            "username" => fake()->userName(),
            "password" => bcrypt("password"),
            "jenis_penilai" => rand(1,2)
        ];
    }
}
