<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Informasi>
 */
class InformasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul" => fake()->jobTitle(),
            "description" => fake()->sentence(10),
            "file" => "/upload/informasi/informasi.pdf",
            "untuk_mahasiswa" => fake()->boolean,
            "untuk_penilai_substansi" => fake()->boolean,
            "untuk_penilai_administrasi" => fake()->boolean,
            "untuk_peninjau" => fake()->boolean,
            "untuk_warek" => fake()->boolean,
        ];
    }
}
