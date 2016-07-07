<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{

    protected $table = 'peliculas';
    protected $fillable=[
        'titulo',
        'año',
        'genero',
        'descripcion_pelicula',
        'idiomas','director',
        'web_oficial',
        'actores'
    ];

    public function tipo_pelicula()
    {
        return $this->belongsTo('App\TipoIdioma');
    }
    public function getTipoAttribute()
    {
        return !is_null($this->tipo_idioma)?$this->tipo_idioma->nombre:'ERROR';
    }

}
