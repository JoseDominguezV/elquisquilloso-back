<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'subtitulo',
        'contenido',
        'estado_revision',
        'autor_id'
    ];
}
