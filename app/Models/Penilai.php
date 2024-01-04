<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Penilai extends Model
{
    use HasFactory;

    protected $table = "penilai";

    protected $hidden = ["password"];

    protected $fillable = [
        "username", "nama", "jenis_penilai", "password"
    ];

    public function tipePenilai() {
        $jenis = [1 => "Penilai Administrator", 2 => "Penilai Substansi"];

        return $jenis[$this->jenis_penilai];
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function penilaianSubstansi() {
        return $this->hasMany(Usulan::class, "penilai_substansi_id");
    }
    
    public function penilaianAdministrasi() {
        return $this->hasMany(Usulan::class, "penilai_administrasi_id");
    }
}
