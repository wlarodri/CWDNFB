@extends('master')


@section('barra-lateral')

    <li class="btn btn-default"><a href="{{ URL::to('usuario/create') }}">Agregar Usuario</a></li>

    <li class="btn btn-default"><a href="{{ URL::to('usuario') }}">Usuarios</a></li>

@stop
@section('content')
    <h1> {!! $usuario->nombre !!}</h1>
    @include('partials.messages');
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row col-lg-6">
                <div>Nombre: <span><?php echo $usuario->nombre; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Apellido Paterno <span><?php echo $usuario->apellido_paterno; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Apellido Materno: <span><?php echo $usuario->apellido_materno; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Fecha Nacimiento: <span><?php echo $usuario->fecha_nacimiento; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Ciudad: <span><?php echo $usuario->ciudad; ?></span></div>
            </div>
            <div class="row col-lg-6">
                <div>Género: <span><?php echo $usuario->genero; ?></span></div>
            <div class="row col-lg-6">
                <div>Nick: <span><?php echo $usuario->nombre_usuario; ?></span></div>
            </div>

        </div>
    </div>


    {!! Form::model($usuario, array('route' => array('usuario.destroy', $usuario->id),'method'=>'DELETE', 'class' => 'pull-right')) !!}

    <button type="submit" class="btn-xs btn-danger"
            onClick="return confirm('Está Seguro?')">
        <span class="glyphicon glyphicon-trash" aria-label="Eliminar"></span>  Eliminar información</a>
    </button>
    {!! Form::close() !!}

@stop