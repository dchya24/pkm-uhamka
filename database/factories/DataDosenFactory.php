<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataDosen>
 */
class DataDosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nidn = $this->getNidn();
        $fakultas = "FTII";
        $prodi = "Teknik Informatika";

        return [
            "nidn" => $nidn,
            "nama" => fake()->name(),
            "fakultas" => $fakultas,
            "prodi" => $prodi,
            "keterangan" => true
        ];
    }

    public function getNidn(){
        $query = DB::table('data_dosen')
            ->select('nidn')->get();
        
        $listNidn = [];
        foreach($query as $item){
            array_push($listNidn, $item->nidn);
        }


        $nidn = 0;
        do {
            $generatedNidn = fake()->randomNumber(9, true);

            if(!in_array($generatedNidn, $listNidn)){
                $nidn = $generatedNidn;
                break;
            }
        } while (true);

        return $nidn;
    }
}
