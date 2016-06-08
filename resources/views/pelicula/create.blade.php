
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    {!! Form::open(['url' => 'pelicula','class'=>'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('tiulo_pelicula', 'Título',['class'=>'control-label']) !!}
        {!! Form::text('tiulo_pelicula', null,['class'=>'form-control','maxlength'=>'72']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fechao_pelicula', 'Año',['class'=>'control-label']) !!}
        {!! Form::text('fechao_pelicula', null,['class'=>'form-control','maxlength'=>'10']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genero_pelicula', 'Género',['class'=>'control-label']) !!}
        {!! Form::text('genero_pelicula', null,['class'=>'form-control','maxlength'=>'12']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion_pelicula', 'Descripción',['class'=>'control-label']) !!}
        {!! Form::text('descripcion_pelicula', null,['class'=>'form-control','maxlength'=>'400']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('idioma_pelicula', 'Idioma',['class'=>'control-label']) !!}
        {!! Form::text('idioma_pelicula', null,['class'=>'form-control','maxlength'=>'15']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('director_pelicula', 'Director',['class'=>'control-label']) !!}
        {!! Form::text('director_peliculaa', null,['class'=>'form-control','maxlength'=>'32']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sitioweb_pelicula', 'SitioWeb',['class'=>'control-label']) !!}
        {!! Form::text('sitioweb_pelicula', null,['class'=>'form-control','maxlength'=>'120']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('actores_pelicula', 'Actores/actrices',['class'=>'control-label']) !!}
        {!! Form::text('actores_pelicula', null,['class'=>'form-control','maxlength'=>'50']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('evaluacion_pelicula', 'Evaluación',['class'=>'control-label']) !!}
        {!! Form::text('evauacion_pelicula', null,['class'=>'form-control','maxlength'=>'10']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}

