<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAD | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/color-01.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/ionicons.min.css') }}">
    @livewireStyles
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">

                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Telefono: 33 2460 3527" href="#"><span
                                            class="icon label-before fa fa-mobile" style="font-size: 25px;"></span>Tel:
                                        33 2460 3527</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                
                                @if (Route::has('login'))
                                    @auth
                                        {{-- Proceso de Autenticacion --}}
                                    @auth
                                        {{-- Autenticado --}}
                                        @if (Auth::user()->utype === 'ADM')
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item"><a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action={{ route('logout') }}>
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                            @else
                                            {{-- ADMIN --}}
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item"><a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action={{ route('logout') }}>
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>

                                        @endif
                                    @else

                                        @endif
                                    @else
                                        {{-- No Autenticado --}}
                                        <li class="menu-item"><a title="{{ route('login') }}" href="/login">Login</a>
                                        </li>
                                    @endif

                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="mid-section main-info-area">

                            <div class="wrap-logo-top left-section">
                                <a href="index.html" class="link-to-home"><img
                                        src="{{ asset('assets/images/logoRec.png') }}" alt="mercado"></a>
                            </div>

                            <div class="wrap-search center-section">
                                <div class="wrap-search-form">
                                    <form action="#" id="form-search-top" name="form-search-top">
                                        <input type="text" name="search" value="" placeholder="Buscar estudios...">
                                        <button form="form-search-top" type="button"><i class="fa fa-search"
                                                aria-hidden="true"></i></button>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="nav-section header-sticky">

                        <div class="primary-nav-section">
                            <div class="container">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                    <li class="menu-item home-icon">
                                        <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/result" class="link-term mercado-item-title">Consultar Resultados</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="about-us.html" class="link-term mercado-item-title">Nosotros</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contact-us.html" class="link-term mercado-item-title">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--main area-->
        {{ $slot }}
        <!--main area-->

        <!--footer area-->
        <footer id="footer">
            <div class="wrap-footer-content footer-style-1">

                <div class="wrap-function-info">
                    <div class="container">
                        <ul>
                            <li class="fc-info-item">
                                <i class="fa fa-ambulance" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Asistencia Movil</h4>
                                    <p class="fc-desc">Pida telefonicamente su cita</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-recycle" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Garantia Total</h4>
                                    <p class="fc-desc">Tenemos los mejores protocolos</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-flask" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Resultados Eficientes</h4>
                                    <p class="fc-desc">Sientase seguro con nosotros</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Soporte en Linea</h4>
                                    <p class="fc-desc">Lo atenderemos 24/7</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <!--End function info-->

                <div class="main-footer-content">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Contacto</h3>
                                    <div class="item-content">
                                        <div class="wrap-contact-detail">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <p class="contact-txt">Domicilio: Av. Revolución #706 Zona Centro,
                                                        Guadalajara, Jalisco.</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p class="contact-txt">33 2460 3527 | 33 3316 7721</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <p class="contact-txt">Contact@yourcompany.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Telefonos</h3>
                                    <div class="item-content">
                                        <div class="wrap-hotline-footer">
                                            <span class="desc">Telefonos en linea 24/7</span>
                                            <b class="phone-number">33 2460 3527 | 33 3316 7721</b>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                                <div class="row">

                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                        <div class="wrap-footer-item">
                                            <h3 class="item-header">Redes Sociales</h3>
                                            <div class="item-content">
                                                <div class="wrap-list-item social-network">
                                                    <ul>
                                                        <li><a href="#" class="link-to-item" title="twitter"><i
                                                                    class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                        <li><a href="#" class="link-to-item" title="facebook"><i
                                                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="#" class="link-to-item" title="pinterest"><i
                                                                    class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li><a href="#" class="link-to-item" title="instagram"><i
                                                                    class="fa fa-instagram" aria-hidden="true"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                        <div class="wrap-footer-item">
                                            <h3 class="item-header">Descarga nuestra APP</h3>
                                            <div class="item-content">
                                                <div class="wrap-list-item apps-list">
                                                    <ul>
                                                        <li><a href="#" class="link-to-item"
                                                                title="our application on apple store">
                                                                <figure><img src="assets/images/brands/apple-store.png"
                                                                        alt="apple store" width="128" height="36"></figure>
                                                            </a></li>
                                                        <li><a href="#" class="link-to-item"
                                                                title="our application on google play store">
                                                                <figure><img
                                                                        src="assets/images/brands/google-play-store.png"
                                                                        alt="google play store" width="128" height="36">
                                                                </figure>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                <div class="coppy-right-box">
                    <div class="container">
                        <div class="coppy-right-item item-left">
                            <p class="coppy-right-text">Copyright © 2021 iEmm Media. All rights reserved</p>
                        </div>
                        <div class="coppy-right-item item-right">
                            <div class="wrap-nav horizontal-nav">
                                <ul>
                                    <li class="menu-item"><a href="about-us.html" class="link-term">Nosotros</a>
                                    </li>
                                    <li class="menu-item"><a href="privacy-policy.html"
                                            class="link-term">Politicas de Privacidad</a></li>
                                    <li class="menu-item"><a href="terms-conditions.html"
                                            class="link-term">Terminos y Condiciones</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        @livewireScripts
        <!--footer area-->
    </body>

    </html>
