<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisPkm>
 */
class JenisPkmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                "singkatan" => "PKM-KT",
                "nama_skema" => "Karya Tulis",
            ],
            [
                "singkatan" => "PKM-KW",
                "nama_skema" => "Kewirausahaan",
            ]
        ];
    }
}
