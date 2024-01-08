<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AksesHalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayAksesHalaman = [];

        for($i = 1; $i <=5; $i++){
            $arrayAksesHalaman[] = [
                "usulan" => "usulan " . $i,
                "ubah_nilai_substansi" => false,
                "ubah_nilai_administrasi" => false,
                "ubah_nilai_peninjauan" => false,
                "ubah_rekomendasi" => false,
                "slug" => "usulan-" . $i,
            ];
        }

        \App\Models\AksesHalaman::insert($arrayAksesHalaman);
    }
}
