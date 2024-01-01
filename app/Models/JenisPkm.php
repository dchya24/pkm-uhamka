<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPkm extends Model
{
    use HasFactory;

    protected $table = "jenis_pkm";

    protected $fillable = [
        "singkatan", "nama_skema", "form_substansi", "form_administrasi", "form_peninjau"
    ];
}
