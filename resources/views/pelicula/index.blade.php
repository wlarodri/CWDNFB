


    <li><a href="{{ URL::to('pelicula') }}">Película</a></li>
    <li class="active"><a href="{{ URL::to('pelicula/create') }}">Registrar película</a></li>


    @section('header')
        Película
    @stop



    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Título</td>
            <td>Año</td>
            <td>Género</td>
            <td>Descripción</td>
            <td>Idioma</td>
            <td>Director</td>
            <td>Sitio Web</td>
            <td>Actores</td>
            <td>Evaluación</td>

        </tr>
        </thead>

        <tbody>
        @if(Session::has('message'))
            <p class="class alert alert-success">{{Session::get('message')}}</p>
        @endif
        @foreach($pelicula as $key => $value)
            <tr>
                <td>{{ $value->id_pelicula }}</td>
                <td>{{ $value->titulo_pelicula }}</td>
                <td>{{ $value->año_pelicula }}</td>
                <td>{{ $value->genero_pelicula }}</td>
                <td>{{ $value->descripcion_pelicula }}</td>
                <td>{{ $value->idioma_pelicula }}</td>
                <td>{{ $value->director_pelicula }}</td>
                <td>{{ $value->sitioweb_pelicula }}</td>
                <td>{{ $value->actores_pelicula }}</td>
                <td>{{ $value->evaluacion_pelicula }}</td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('Pelicula/' . $value->id_pelicula) }}"><span class="glyphicon glyphicon-eye-open"></span>  Ver</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-warning" href="{{ URL::to('Pelicula/' . $value->id_pelicula . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span>  Editar</a>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


