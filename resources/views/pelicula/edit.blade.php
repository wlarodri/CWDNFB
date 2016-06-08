@extends('app')


@section('content')

    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    {!! Form::model($pelicula,['route'=>['pelicula.update',$pelicula],'method'=> 'PUT']) !!}



{!! Form::submit('Editar película', array('class' => 'btn btn-warning')) !!}

{!! Form::close() !!}
    @stop



