<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

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

    public function getAuthPassword()
    {
        return $this->password;
    }
}
