<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head>

        <!-- Basic -->
        <title>Magis | @yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/icono.ico') }}">
        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css">
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.css') }}">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">


        <script src="{{ asset('assets/js/modernizrr.js') }}"></script>


    </head>

    <body>
    
        <header class="clearfix">
        
            <!-- Start Top Bar sector del todo arriba-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start buscador -->
                                    <ul class="contact-details">
                                        <li>
                                            <form action="{{ route('buscar') }}" method="POST" role="search">
                                                {{ csrf_field() }}
                                                <input class="buscar" type="search" name="search" placeholder="¿Qué deseas buscar?">
                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-search">buscar</i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                    <!-- End buscador -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                    <!-- Start Social Links -->
                                    <ul class="social-list">
                                        <li>
                                                @guest
                                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Administrar</a>
                                                @else
                                                    <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                                                {{ Auth::user()->name }} <span class="caret"></span>
                                                            </a>
                            
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="{{ route('book.store') }}">
                                                                        Administrador
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                        Logout
                                                                    </a>
                            
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    @endguest
                                            </li>
                                    </ul>
                                    <!-- End Social Links -->
                                </div><!-- .col-md-6 -->
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
        
            <!-- Start  Logo & Naviagtion aqui sector donde esta el logo y el resto derecha -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles 
                        <a class="navbar-brand" href="/">Magistratura</a>
                        -->
                        <a href="{{ route('index') }}" title="A la ventana principal">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" style="max-width:100%;width:200px;height:66px;">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="{{ route('index') }}">Inicio</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Faltas Leves</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('listdocu', [$falta = "Leves", $cate = "Jurisprudencia"]) }}">Jurisprudencia</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listdocu', [$falta = "Leves", $cate = "Resoluciones"]) }}">Resoluciones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>Faltas Graves</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('listdocu', [$falta = "Leves", $cate = "Jurisprudencia"]) }}">Jurisprudencia</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listdocu', [$falta = "Leves", $cate = "Resoluciones"]) }}">Resoluciones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>Faltas Gravisimas</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('listdocu', [$falta = "Leves", $cate = "Jurisprudencia"]) }}">Jurisprudencia</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listdocu', [$falta = "Leves", $cate = "Resoluciones"]) }}">Resoluciones</a>
                                    </li> 
                                </ul>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
        
        @section('contenido')
            
        @show
        
        
        
        <!-- Start Footer Section el abajo de todo aqui info tal vez-->
        <section id="footer-section" class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Oficina direccion</span>
                            </h3>
                        </div>
                        
                        <div class="footer-address">
                            <ul>
                                <li class="footer-contact"><i class="fa fa-home"></i>123, Second Street name, Address</li>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a href="#">info@domain.com</a></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+1 (123) 456-7890</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><a href="#" target="_blank">www.domain.com</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
                </div><!--/.row -->
            </div><!-- /.container -->
        </section>
        <!-- End Footer Section -->
        
        
        <!-- Start CCopyright Section bendito copiright -->
        <div id="copyright-section" class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="copyright">
                            Copyright © 2019. All Rights Reserved.Design and Developed by Albert and Miki
                        </div>
                    </div>
                    
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End CCopyright Section -->
        
        
        
       <!-- Sulfur JS File -->
        <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/js/count-to.js') }}"></script>
        <script src="{{ asset('assets/js/styleswitcher.js') }}"></script>
        
        <script src="{{ asset('assets/js/map.js') }}"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script> 
        
    
    </body>
</html>