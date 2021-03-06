<?php

namespace MovieNet\Http\Requests;

use MovieNet\Http\Requests\Request;

class PeliculaCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'=>'requied|min:15|ubique:pelicula,titulo',
            'año'=>'requied',
            'genero'=>'requied|min:5',
            'descripcion_pelicula'=>'requied',
            'idiomas'=>'requied',
            'director'=>'requied',
            'web_oficial'=>'requied',
            'actores'=>'requied',

        ];
    }
}
