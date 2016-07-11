@extends('master')

@foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach

@section('barra-lateral')

    <li class="btn btn-default"><a href="{{ URL::to('usuario') }}">Usuarios</a></li>

@stop
@section('header')
    Registrar Usuario
@stop
@section('content')

    @include('partials.messages')

    <div class="panel-body">

        {!! Form::open(array('route' => 'usuario.store','class'=>'form-horizontal')) !!}


        <div class="form-group">
            {!! Form::label('nombre', 'Nombre',['class'=>'control-label']) !!}
            {!! Form::text('nombre', null,['class'=>'form-control','maxlength'=>'72']) !!}

            {!! Form::label('apellido_paterno', 'Apellido Paterno',['class'=>'control-label']) !!}
            {!! Form::text('apellido_paterno', null,['class'=>'form-control','maxlength'=>'10']) !!}

            {!! Form::label('apellido_materno', 'Apellido Materno',['class'=>'control-label']) !!}
            {!! Form::text('apellido_materno', null,['class'=>'form-control','maxlength'=>'15']) !!}


            {!! Form::label('fecha_nacimiento', 'fecha de Nacimiento',['class'=>'control-label']) !!}
            {!! Form::date('fecha_nacimiento', null,['class'=>'form-control','maxlength'=>'15']) !!}

            {!! Form::label('ciudad', 'Ciudad',['class'=>'control-label']) !!}
            {!! Form::text('ciudad', null,['class'=>'form-control','maxlength'=>'32']) !!}

            {!! Form::label('genero', 'Género',['class'=>'control-label']) !!}
            {!! Form::text('genero', null,['class'=>'form-control','maxlength'=>'120']) !!}


            {!! Form::label('nombre_usuario', 'Nombre de Usuario',['class'=>'control-label']) !!}
            {!! Form::text('nombre_usuario', null,['class'=>'form-control','maxlength'=>'50']) !!}

        </div>
        <BR>

        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop