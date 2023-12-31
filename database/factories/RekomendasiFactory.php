<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekomendasi>
 */
class RekomendasiFactory extends Factory
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
                "nama" => "belmawa",
                "link_group" => "www.belmawa.com",
            ],
            [
                "nama" => "internal",
                "link_group" => "www.internal.com",
            ]
        ];
    }
}
