<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilai extends Model
{
    use HasFactory;

    protected $table = "penilai";

    protected $fillable = [
        "username", "nama", "jenis_penilai", "password"
    ];

    public function tipePenilai() {
        $jenis = [1 => "Penilai Administrator", 2 => "Penilai Substansi"];

        return $jenis[$this->jenis_penilai];
    }
}
