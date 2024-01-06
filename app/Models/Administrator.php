<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Administrator extends Model
{
    use HasFactory;
    
    protected $table = "administrator";
    protected $fillable = [
        "username", "password", "nama"
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function usulan(){
        return $this->hasMany(Usulan::class, "wakil_rektor_id", "id");
    }
}
