
@extends('master')

@section('barra-lateral')

    <li class="btn btn-default"><a href="{{ URL::to('pelicula/create') }}">Agregar película</a></li>



@stop

    @section('header')
        Película
    @stop


    @section('content')
        @include('partials.messages')

    <table class="table table-striped table-bordered">
        <thead>
        <tr>

            <td>Título</td>
            <td>Año</td>
            <td>Género</td>
            <td>Descripción</td>
            <td>Idioma</td>
            <td>Director</td>
            <td>Sitio Web</td>
            <td>Actores</td>

        </tr>
        </thead>

        <tbody>
        @if(Session::has('message'))
            <p class="class alert alert-success">{{Session::get('message')}}</p>
        @endif
        @foreach($pelicula as $key => $value)
            <tr>

                <td>{{ $value->titulo }}</td>
                <td>{{ $value->año}}</td>
                <td>{{ $value->genero }}</td>
                <td>{{ $value->descripcion_pelicula }}</td>
                <td>{{ $value->idiomas }}</td>
                <td>{{ $value->director }}</td>
                <td>{{ $value->web_oficial }}</td>
                <td>{{ $value->actores }}</td>
            </td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('pelicula/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span>  </a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-warning" href="{{ route('pelicula.edit',$value->id)}}"><span class="glyphicon glyphicon-pencil"></span>  </a>

                    <a class="btn btn-small btn-danger" href="{{ route('pelicula.show',$value->id)}}"><span class="glyphicon glyphicon-trash"></span>  </a>
                </td>

            </tr>
        @endforeach
        </tbody>

    </table>
  <div class="text-center">
      {!! $pelicula->render() !!}
  </div>



@endsection
