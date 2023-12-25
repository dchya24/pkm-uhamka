<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDosen extends Model
{
    use HasFactory;

    protected $table = "data_dosen";

    protected $fillable = [
        "nidn", "nama", "fakultas", "prodi", "keterangan"
    ];
}
