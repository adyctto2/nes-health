<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NesHealth</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
        <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/style1.css')}}" rel="stylesheet">
        <link href="{{ asset('css/agency.min.css') }} " rel="stylesheet">
<link href="{{ asset('css/agency.css') }} " rel="stylesheet">
        <link href="{{asset('css/menuDesc.css')}}" rel="stylesheet">

        <!-- fuentes -->
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fauna+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mada:600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mada" rel="stylesheet">
        <!-- Styles -->

        <style>


            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .view {
                background: url(../img/desc.jpg)no-repeat center center;
                background-size: cover;

            }
            html,
            body,
            header,
            .view {
              height: 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>


    <body>
      <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar fontTotal">
      <div id="logo" class="pull-left">
        <a style="color: #0d47a1;" href="{{route('principal')}}" class="navbar-brand  fuente"><img src="{{asset('img/logos/NES.png')}}" width="35px" alt="Quantum Center"> <strong>NES</strong>
       <strong style="color: #ffbb33 ;">    HEALTH       </strong></a>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
        <!-- <a class="navbar-brand" href="#"><strong>Quantum Center dfdfdgdgdfgdf    </strong></a> -->



    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item  ">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">

              <a class="nav-link js-scroll-trigger" href="{{route('acercade')}}">Acerca de NES</a>
        </li>
        <li class="nav-item dropdown">
              <!-- <a class="nav-item dropdown js-scroll-trigger" href="#">Productos</a> -->

        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Productos</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item text-capitalize" href="{{route('productosDescripcion')}}">Descripcion</a>
          <a class="dropdown-item text-capitalize" href="{{route('bioenergetix')}}">Sistema BioEnegetiX WellNES</a>
          <a class="dropdown-item text-capitalize" href="{{route('softEscaneo')}}">Software de escaneo</a>
          <a class="dropdown-item text-capitalize" href="{{route('mihealth')}}">NES miHealth</a>
          <a class="dropdown-item text-capitalize" href="{{route('infoceuticals')}}">Infoceuticos</a>
          <a class="dropdown-item text-capitalize" href="{{route('puntoEleccion')}}">Punto de elección</a>
        </div>
            </li>
            <li class="nav-item dropdown">
              <!-- <a class="nav-item dropdown js-scroll-trigger" href="#">Productos</a> -->

        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Ciencia</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item text-capitalize" href="{{route('ciencia')}}">Ciencia de NES</a>
          <a class="dropdown-item text-capitalize" href="{{route('tecnologiaNES')}}">Cómo funciona la tecnología NES</a>
          <a class="dropdown-item text-capitalize" href="{{route('centroRecursos')}}">Centro de Recursos</a>
          <a class="dropdown-item text-capitalize" href="{{route('campoCuerpoHumano')}}">Campo del cuerpo humano</a>
          <a class="dropdown-item text-capitalize" href="{{route('investigacion')}}">Investigación</a>
          <a class="dropdown-item text-capitalize" href="{{route('casosEstudio')}}">Casos de Estudio</a>
          <a class="dropdown-item text-capitalize" href="{{route('ensayosClinicos')}}">Ensayos clínicos</a>
        </div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{asset('resultados')}}">Resultados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{asset('contactenos')}}">Contáctenos</a>
            </li>
        <!-- <li class="nav-item">
          <a class="nav-link dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Acerca de</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contactos</a>
        </li> -->

      </ul>
      <ul class="navbar-nav nav-flex-icons">

        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    </nav>

    <div class="view intro-2" style="">
    <div class="full-bg-img">
      <div class="mask rgba-purple-light flex-center">

        <div class="container text-center white-text wow fadeInUp">
        <h3 class="font"> Punto de elección</h3>
          <br>
          <!-- <h5 class="font1">Descubra el único sistema que aborda los tres factores críticos para la salud humana y el bienestar total, permitiéndole detectar y corregir todos los aspectos del cuerpo: su información, energía y propósito.</h5> -->

        </div>
      </div>
    </div>
    </div>

    </header>
  <!--Main Navigation-->

  <!--Main Layout-->
      @yield('formPunt')

      <footer class="page-footer font-small special-color-dark pt-4">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fa fa-facebook"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fa fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="fa fa-google-plus"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fa fa-linkedin"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="fa fa-dribbble"> </i>
            </a>
          </li>
        </ul>
        <!-- Social buttons -->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="#"> NesHealth Bolivia</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>



    </body>
</html>
