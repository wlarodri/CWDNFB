
@extends('master')

@section('barra-lateral')

    <li class="btn btn-default"><a href="{{ URL::to('usuario/create') }}">Agregar usuario</a></li>



@stop

    @section('header')
        <div class="text-center">
            Usuarios
        </div>
    @stop


    @section('content')
        @include('partials.messages')

    <table class="table table-striped table-bordered table-condensed table-responsive">
        <thead>
        <tr>

            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Fecha Nacimiento</td>
            <td>Ciudad</td>
            <td>Género</td>
            <td>Nick</td>

        </tr>
        </thead>

        <tbody>
        @if(Session::has('message'))
            <p class="class alert alert-success">{{Session::get('message')}}</p>
        @endif
        @foreach($usuario as $key => $value)
            <tr>

                <td>{{ $value->nombre }}</td>
                <td>{{ $value->apellido_paterno}}</td>
                <td>{{ $value->apellido_materno }}</td>
                <td>{{ $value->fecha_nacimiento }}</td>
                <td>{{ $value->ciudad }}</td>
                <td>{{ $value->genero }}</td>
                <td>{{ $value->nombre_usuario }}</td>
            </td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('usuario/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span>  </a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-warning" href="{{ route('usuario.edit',$value->id)}}"><span class="glyphicon glyphicon-pencil"></span>  </a>

                    <a class="btn btn-small btn-danger" href="{{ route('usuario.show',$value->id)}}"><span class="glyphicon glyphicon-trash"></span>  </a>
                </td>

            </tr>
        @endforeach
        </tbody>

    </table>
  <div class="text-center">
      {!! $usuario->render() !!}
  </div>



@endsection
