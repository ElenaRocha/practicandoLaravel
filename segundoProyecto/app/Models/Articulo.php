<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $table="misArticulos";

    protected $dates = ["deleted_at"];

    protected $fillable = [
        "nombre_articulo",
        "precio",
        "pais_origen",
        "observaciones",
        "seccion"
    ];
}
