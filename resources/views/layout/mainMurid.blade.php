<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>E-Modul</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('poco/assets/img/favicon/boy.png') }}" />
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('poco/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('poco/assets/css/fontawesome-all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('poco/assets/css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('poco/assets/css/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('poco/assets/css/default.css') }}" />
        <link rel="stylesheet" href="{{ asset('poco/assets/css/aos.css') }}" />
        <link rel="stylesheet" href="{{ asset('poco/assets/css/style.css') }}" />
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Add your site or application content here -->

        <!--  HEADER AREA -->
        <header id="header" class="header-area">
            <div class="container custom-container">
                <nav class="menu-area d-flex align-items-center">
                    {{-- <div class="logo logo-container">
                        <a href="index.html"><img src="{{ asset('img/logo.jpg') }}" alt="logo" /></a>
                    </div> --}}
                    
                    @if (Auth::check())
                    <ul class="main-menu d-flex align-items-center">
                        <li>
                            <a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('detailMateri*') ? 'active' : '' }}" href="/detailMateri">Materi</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('riwayat') ? 'active' : '' }}" href="/riwayat">Riwayat</a>
                        </li>
                    </ul>
                    
                    @endif

                    <div class="right-content ml-auto">
                        <div class="contact-number">
                            @if (Auth::check())
                                @if (Auth::user()->level == 'guru')
                                    <a href="/dbGuru" class="primary__button primary__button-bgBlack">Dashboard</a>
                                @endif
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="primary__button primary__button-bgBlack ml-2">Keluar</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a class="primary__button primary__button-bgBlack" href="/login">Masuk</a>
                                <a class="primary__button primary__button-bgBlack" href="/register">Daftar</a>
                            @endif
                        </div>
                    </div>
                    
                    <div class="hamburger-menu"><span></span><span></span><span></span></div>
                </nav>
                <aside>
                    <div class="sidebar-menu">
                        <div class="close-sidebar"><span></span><span></span></div>
                        <div class="logo">
                            <a href="index.html">
                            </a>
                        </div>
                        <ul class="main-menu">
                            @if (Auth::check())
                                @if (Auth::user()->level == 'guru')
                                    <a href="/dbGuru" class="primary__button primary__button-bgBlack">Dashboard</a>
                                @endif
                            <li><a href="/detailMateri">Materi</a></li>
                            <li><a href="/riwayat">Riwayat</a></li>
                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="primary__button primary__button-bgBlack ml-2">Keluar</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                        </ul>
                        <a class="primary__button primary__button-bgBlack contacprimary__button" href="/login">
                            Masuk
                        </a>
                        <a class="primary__button primary__button-bgBlack contacprimary__button" href="/register">
                            Daftar
                        </a>
                        @endif
                    </div>
                    <div class="overlay"></div>
                </aside>
            </div>
            <div class="search-box">
                <div class="search-form">
                    <form action="#">
                        <input type="text" placeholder="Enter Your Kayword" />
                        <button type="submit">
                            <img src="{{ asset('poco/assets/img/logo/search.svg')}}" alt="search logo" />
                        </button>
                    </form>
                </div>
                <a class="search-close" href="javascript:void(0)"><i class="fas fa-times"></i></a>
            </div>
        </header>

        @yield('content')

        <!-- JS here -->
        <script src="{{ asset('poco/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/circle-progress.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('poco/assets/js/slider.js') }}"></script>
        <script src="{{ asset('poco/assets/js/aos.js') }}"></script>
        <script src="{{ asset('poco/assets/js/main.js') }}"></script>
        <script> 
        /* magnificPopup video view*/
            $('.popup-video').magnificPopup({
              type: 'iframe',
            });
        </script>
    </body>
</html>
