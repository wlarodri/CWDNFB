<?php

namespace MovieNet;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable=[
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'ciudad',
        'genero',
        'nombre_usuario'
    ];
}



