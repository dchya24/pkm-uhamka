<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = "informasi";

    protected $fillable = [
        "judul", "description", "file",
        "untuk_mahasiswa", "untuk_penilai_substansi",
        "untuk_penilai_administrasi", "untuk_peninjau",
        "untuk_warek"
    ];

    public function dikirimKepada(){
        $array = [];

        if($this->untuk_mahasiswa) array_push($array, "Mahasiswa");
        
        if($this->untuk_penilai_substansi) array_push($array, "Penilai Substansi");

        if($this->untuk_penilai_administrasi) array_push($array, "Penilai Administrasi");

        if($this->untuk_peninjau) array_push($array, "Peninjau");

        if($this->untuk_warek) array_push($array, "Wakil Rektor");


        return join(", ", $array);
    }
}
