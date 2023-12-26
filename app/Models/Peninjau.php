<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
