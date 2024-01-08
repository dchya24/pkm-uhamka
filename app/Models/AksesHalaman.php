<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesHalaman extends Model
{
    use HasFactory;

    protected $table = 'akses_halaman';
    
    protected $fillable = [
        "usulan", "ubah_nilai_substansi", 
        "ubah_nilai_administrasi", "ubah_nilai_peninjauan",
        "ubah_rekomendasi", "slug"
    ];
}
