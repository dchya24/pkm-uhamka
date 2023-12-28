<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetuaKelompok extends Model
{
    use HasFactory;

    protected $table = "ketua_kelompok";

    protected $fillable = [
        "data_mahasiswa_id", "nim", "password"
    ];

    public function mahasiswa(){
        return $this->belongsTo(DataMahasiswa::class, "data_mahasiswa_id", "id");
    }
}
