<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elecciones</title>
    <script src="https://www.google.com/jsapi"></script>
    
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/844dec5863.js" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   



    <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
        .z-order{
          zindex-dropdown:               1000;
        }
        
        
        
        </style>

</head>
<body>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<header>

    





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Votaciones 2022</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout">LogOut</a>
      </li>
      
       
        


        <li class="nav-item dropdown dx-1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Casilla
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('casilla.create') }}">Registrar</a></li>
                                <li><a class="dropdown-item" href="{{ route('casilla.index') }}">Listar</a></li>
                                
                                <li><a class="dropdown-item" href="/casilla/pdf">Descargar en PDF</a></li>
                            
                              </ul>
                        </li>



        <li class="nav-item dropdown dx-1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Voto
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('voto.create') }}">Registrar</a></li>
                                <li><a class="dropdown-item" href="{{ route('voto.index') }}">Listar</a></li>
                                <li><a class="dropdown-item" href="voto/graphic">Graficass</a></li>
                            
                              </ul>
                        </li>


                        <li class="nav-item dropdown dx-1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Candidato
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('candidato.index') }}">Listar</a></li>                             
                            <li><a class="dropdown-item" href="{{ route('candidato.create') }}">Registrar</a></li>
                           </ul>
                        </li>

        <li class="nav-item dropdown dx-1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Eleccion
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('eleccion.create') }}">Registrar</a></li>
                                <li><a class="dropdown-item" href="{{ route('eleccion.index') }}">Listar</a></li>
                            </ul>
                        </li>




    </ul>
   
  </div>
</nav>



        <div class="row">
            <div class="col-md-2">
                <img src="/tecnm_sintexto.svg" width="200px">
            </div>
            <div class="col-md-8 text-center">

                <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                <h5>Elección de la reina ITVO</h5>
            </div>
            <div class="col-md-2">

            </div>

        </div>
      
    </header>
    <div class="container">
        @yield('content')
    </div>
    <div class="conatainer2">
    @yield('content2')
</div>

<script src="{{ asset('js/app.js') }}" type="text/js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chartdiv2"></div>
                    
            
</body>
</html>