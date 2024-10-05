<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function articulo(){
        return $this->hasOne("App\Articulo");
    }

    public function articulos(){
        return $this->hasMany("App\Articulo");
    }

    public function perfils(){
        return $this->belongsToMany("App\Perfil");
    }

    public function calificaciones(){
        return $this->morphMany("App\Calificaciones", "calificacion");
    }
}
