<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--  Material Dashboard CSS    -->
   {{--  <link href="{{ asset('css/bootstrap/css/bootstrap.css') }}" rel="stylesheet" /> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- W3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/w3.css') }}">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
               <div class="navbar-header">
                  <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
                     <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
                        <ul class="nav navbar-nav navbar-right">
                           <!-- Authentication Links -->
                           @if (Auth::guest())
                              <li><a href="{{ url('/login') }}">Login</a></li>
                              <li><a href="{{ url('/register') }}">Register</a></li>
                           @else
                              <li class="dropdown">

                                 <li><a href="{{ url('/home')}}">Pagina inicial</a></li>
                                 @if( Auth::User()->perfil == 'F')
                                    <?php $id = Auth::user()->id; ?>
                                    <li><a href="{{ url("/dadospessoaispf/$id/edit")}}">Dados Pessoais</a></li>
                                 @else
                                     <?php $id = Auth::user()->id; ?>
                                    <li><a href="{{ url("/dadospessoaispj/$id/edit")}}">Dados Pessoais</a></li>
                                 @endif
                                 <li><a href="{{ url('/dadosveiculos')}}">Dados do Veiculo</a></li>
                                 <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                           Sair
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                    </form>
                                 </li>  
                               </li>
                           @endif
                        </ul>
                    </div>
                    <div class="w3-teal">
                        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
                        <b style="font-size: 26px;padding-left: 242px">HOPE</b>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                   
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</body>
</html>


