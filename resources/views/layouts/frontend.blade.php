<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Furnish - Furniture and Decor Website Template</title>
{{-- stile para que el menu de arriba no se vea --}}
    <style>
        .checkoutBox{
            margin-top: 200px;
            
        }
    </style>
    @yield('styles')


    <!-- Scripts -->
    <script src="{{ asset('css/app.css') }}" defer></script>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>





    <div id="app">
        <!--====== PRELOADER PART START ======-->

        <div class="preloader">
            <div class="spin">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>

        <!--====== PRELOADER PART START ======-->

        <!--====== HEADER PART START ======-->

        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-fixed-top navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a data-scroll-nav="0" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#product">Fotografos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#service">galerias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#showcase">Fotos</a>
                                    </li>
                                    <li class="nav-item">
                                        {{-- <a data-scroll-nav="0" href="#team">Eventos</a> --}}
                                        <div class="dropdown">
                                            <button class="nav-item" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mis Eventos
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <a class="dropdown-item" href="#team">Mis Eventos</a>
                                              <a class="dropdown-item" href="#team">Eventos Publicos</a>
                                            </div>
                                          </div>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="#contact">Contact</a>
                                    </li>
                                    @if (Route::has('login'))
                                        @auth
                                            <cart />
                                            {{-- <li class="nav-item">
                                                <a href="{{ url('/dashboard') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Fotos</a>
                                            </li> --}}
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia
                                                    sesion</a>
                                            </li>
                                            <li class="nav-item">
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}"
                                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrate</a>
                                            </li>
                                        @endif
                                    @endauth
                                    @endif
                                </ul> <!-- navbar nav -->
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>

        <!--====== HEADER PART ENDS ======-->

        @yield('content')
    </div>
    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>


    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>


    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>

    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

{{-- sirve para que al recargar la pagina, aparesca en la parte superior, no importando si antes de recargar no estabas allí --}}
    <script>
        window.onbeforeunload = function(){
            window.scrollTo(0,0);
        }

    </script>
</body>

</html>
