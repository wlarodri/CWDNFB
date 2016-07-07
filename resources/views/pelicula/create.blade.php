@extends('master')



@foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach

@section('barra-lateral')

    <!-- <li><a href="{{ URL::to('pelicula') }}">Película</a></li>-->
    <li class="btn btn-info"><a href="{{ URL::to('pelicula/create') }}">Registrar película</a></li>

    <li class="btn btn-default"><a href="{{ URL::to('pelicula/edit') }}">Editar película</a></li>

    <li class="btn btn-default"><a href="{{ URL::to('pelicula/create') }}">Eliminar película</a></li>
@stop
@section('header')
    Registrar Película
@stop
@section('content')

    <div class="panel-body">

        {!! Form::open(array('route' => 'pelicula.store','class'=>'form-horizontal')) !!}


        <div class="form-group">
            {!! Form::label('tiulo', 'Título',['class'=>'control-label']) !!}
            {!! Form::text('titulo', null,['class'=>'form-control','maxlength'=>'72']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('año', 'Año',['class'=>'control-label']) !!}
            {!! Form::date('año', null,['class'=>'form-control','maxlength'=>'10']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genero', 'Género',['class'=>'control-label']) !!}
            {!! Form::text('genero', null,['class'=>'form-control','maxlength'=>'15']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion_pelicula', 'Descripción',['class'=>'control-label']) !!}
            <textarea class="form-control" name="descripcion_pelicula" rows="3"></textarea>


            {!! Form::label('idiomas', 'Idioma',['class'=>'control-label']) !!}
            {!! Form::text('idiomas', null,['class'=>'form-control','maxlength'=>'15']) !!}

            {!! Form::label('director', 'Director',['class'=>'control-label']) !!}
            {!! Form::text('director', null,['class'=>'form-control','maxlength'=>'32']) !!}

            {!! Form::label('web_oficial', 'SitioWeb',['class'=>'control-label']) !!}
            {!! Form::text('web_oficial', null,['class'=>'form-control','maxlength'=>'120']) !!}


            {!! Form::label('actores', 'Actores/actrices',['class'=>'control-label']) !!}
            {!! Form::text('actores', null,['class'=>'form-control','maxlength'=>'50']) !!}

        </div>
        <BR>

        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop