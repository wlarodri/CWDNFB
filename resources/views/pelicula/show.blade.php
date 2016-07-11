@extends('master')


@section('barra-lateral')

    <li class="btn btn-default"><a href="{{ URL::to('pelicula/create') }}">Agregar película</a></li>

    <li class="btn btn-default"><a href="{{ URL::to('pelicula') }}">Películas</a></li>

@stop
@section('content')
    <h1> {!! $pelicula->titulo !!}</h1>
    @include('partials.messages');
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row col-lg-6">
                <div>Título: <span><?php echo $pelicula->titulo; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Año: <span><?php echo $pelicula->año; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Género: <span><?php echo $pelicula->genero; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Descripción: <span><?php echo $pelicula->descripcion_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Idioma: <span><?php echo $pelicula->idiomas; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Director: <span><?php echo $pelicula->director; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Sitio Web: <span><?php echo $pelicula->web_oficial; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Actores: <span><?php echo $pelicula->actores; ?></span></div>
            </div>
        </div>
    </div>

    <a class="btn-xs btn-success" href="{{ URL::to('pelicula' ) }}"><span type="submit" class="glyphicon glyphicon glyphicon-ok" aria-label="Aceptar"></span> Aceptar </a>


    {!! Form::model($pelicula, array('route' => array('pelicula.destroy', $pelicula->id),'method'=>'DELETE', 'class' => 'pull-right')) !!}
    <button type="submit" class="btn-xs btn-danger"
            onClick="return confirm('Está Seguro?')">
        <span class="glyphicon glyphicon-trash" aria-label="Eliminar"></span>  Eliminar información</a>
    </button>
    {!! Form::close() !!}

@stop