@extends('app')


@section('barra-lateral')

    <!-- <li><a href="{{ URL::to('pelicula') }}">Película</a></li>-->
    <li class="btn btn-default"><a href="{{ URL::to('pelicula/create') }}">Registrar película</a></li>

    <li class="btn btn-default"><a href="{{ URL::to('pelicula/edit') }}">Editar película</a></li>

    <li class="btn btn-default"><a href="{{ URL::to('pelicula/create') }}">Eliminar película</a></li>
@stop
@section('content')
    <h1> {!! $pelicula->nombre_pelicula !!}</h1>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row col-lg-6">
                <div>Título: <span><?php echo $pelicula->titulo_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Año: <span><?php echo $pelicula->año_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Género: <span><?php echo $pelicula->genero_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Descripción: <span><?php echo $pelicula->descripcion_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Idioma: <span><?php echo $pelicula->idioma_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Director: <span><?php echo $pelicula->director_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Sitio Web: <span><?php echo $pelicula->sitioweb_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Actores: <span><?php echo $pelicula->actores_pelicula; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Evaluación: <span><?php echo $pelicula->evaluacion_pelicula; ?></span></div>
            </div>
        </div>
    </div>

    {!! Form::open(array('url' => 'Pelicula/' . $pelicula->id, 'class' => 'pull-right')) !!}
    {!! Form::hidden('_method', 'DELETE') !!}
    {!! Form::submit('Eliminar informacion', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}
@stop