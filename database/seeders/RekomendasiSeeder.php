<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Rekomendasi::insert(
            [
                [
                    "nama" => "belmawa",
                    "link_group" => "www.belmawa.com",
                ],
                [
                    "nama" => "internal",
                    "link_group" => "www.internal.com",
                ]
            ]
        );
    }
}
