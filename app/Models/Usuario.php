<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
class Usuario extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'password',
        'correo_electronico',
        'rol'
    ];
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
