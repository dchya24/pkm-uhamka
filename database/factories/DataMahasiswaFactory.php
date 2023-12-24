<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataMahasiswa>
 */
class DataMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fullNim = $this->getNim();
        $fakultas = "FTII";
        $prodi = "Teknik Informatika";

        return [
            "nim" => $fullNim,
            "nama" => fake()->name(),
            "fakultas" => $fakultas,
            "prodi" => $prodi,
            "keterangan" => true
        ];
    }

    public function getNim(){
        $query = DB::table('data_mahasiswa')
            ->select('nim')->get();
        
        $listNim = [];
        foreach($query as $item){
            array_push($listNim, $item->nim);
        }

        $prefixNim = "1903015";

        $nim = 0;
        do {
            $rand = rand(1, 999);
            $postfixNim = str_pad($rand, 3, "0", STR_PAD_LEFT);

            $fullNim = $prefixNim . $postfixNim;

            if(!in_array($fullNim, $listNim)){
                $nim = $fullNim;
                break;
            }
        } while (true);

        return $nim;
    }
}
