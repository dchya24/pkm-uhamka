<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Peninjau extends Model
{
    use HasFactory;

    protected $table = "peninjau";

    protected $fillable = [
        "data_dosen_id", "nidn", "password"
    ];

    public function dosen(){
        return $this->belongsTo(DataDosen::class, "data_dosen_id", "id");
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function usulan(){
        return $this->hasMany(usulan::class, "peninjau_id", "id");
    }
}
