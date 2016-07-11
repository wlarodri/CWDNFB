<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::script('js/bootstrap.js') !!}
    {!! Html::script('js/jquery-1.12.4.min.js') !!}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MovieNet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Sticky footer styles
    -------------------------------------------------- */
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 0px;
            background-color: #f5f5f5;
        }


    </style>


</head>
<body><!--SE AGREGA FONDO A TODA LAS PAGINA MENOS HOME-->
<nav id="myNavbar" class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="{{ URL::to('') }}"><span class="glyphicon glyphicon-home"></span> Menú</a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">



                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>




<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">

    </div>
</div>
<div class="container">

    <ul class="nav nav-pills nav-stacked col-lg-2">
        @yield('barra-lateral')
    </ul>

    <div class="col-lg-10">
        <h1>
            @yield('header')
        </h1>
        <div>
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        </div>
        @yield('content')
    </div>


</div>

<!-- Scripts -->

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
@yield('scripts')

</body>
</html>