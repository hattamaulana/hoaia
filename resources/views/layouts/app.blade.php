<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset( '/vendor/seelife/img/logo.png' ) }}" type="image/png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/css/bootstrap.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/vendors/linericon/style.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/css/font-awesome.min.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/vendors/lightbox/simpleLightbox.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/vendors/nice-select/css/nice-select.css' ) }}">

        <!-- main css -->
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/css/style.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'vendor/seelife/css/responsive.css' ) }}">
        <link rel="stylesheet" href="{{ asset( 'vendor/regform/css/style.css' ) }}">
    </head>

    <body>
        @component('components.navbar')
            @slot('brand')
                @yield('brand')
            @endslot

            @yield('nav-link')
        @endcomponent

        @yield('content')

        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row section_gap">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title large_title">About.</h4>
                                <p>
                                    Hoaia adalah situs donasi untuk reboisasi dengan cara donasi tunai atau pengiriman bibit tanaman langsung.
                                </p>
                                <p>
                                    Mari bergotong royong membangun Indonesia hijau!
                                </p>
                            </div>
                        </div>

                        <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title">Contact Us</h4>
                                <div class="ml-40">
                                    <p class="sm-head">
                                        <span class="fa fa-location-arrow"></span>
                                        Head Office
                                    </p>
                                    <p>Jl. Veteran No. 19 Lowokwaru, Malang. 65141</p>

                                    <p class="sm-head">
                                        <span class="fa fa-phone"></span>
                                        Phone Number
                                    </p>
                                    <p>
                                        (0341) 221133
                                    </p>

                                    <p class="sm-head">
                                        <span class="fa fa-envelope"></span>
                                        Email
                                    </p>
                                    <p>
                                        hoaia@gmail.com <br>
                                        www.hoaia.heroku.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row d-flex">
                        <p class="col-lg-12 footer-text text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('vendor/seelife/js/jquery-3.2.1.min.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/js/popper.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/js/bootstrap.min.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/js/stellar.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/vendors/lightbox/simpleLightbox.min.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/vendors/nice-select/js/jquery.nice-select.min.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/js/jquery.ajaxchimp.min.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/js/mail-script.js' )  }}"></script>
        <script src="{{ asset('vendor/seelife/js/countdown.js' ) }}"></script>

        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset( 'vendor/seelife/js/gmaps.min.js' ) }}"></script>
        <script src="{{ asset( 'vendor/seelife/js/theme.js' ) }}"></script>
    </body>
</html>
