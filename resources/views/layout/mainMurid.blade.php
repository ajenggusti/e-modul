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
                    <div class="logo logo-container">
                        <a href="index.html"><img src="{{ asset('img/logo.jpg') }}" alt="logo" /></a>
                    </div>
                    <ul class="main-menu d-flex align-items-center">
                        <li>
                            <a class="active" href="javascript:void(0)">Home</a>
                        </li>
                        <li><a href="/riwayat">Riwayat</a></li>


                    </ul>
                    <div class="right-content ml-auto">
                        <div class="contact-number">
                            <a class="primary__button primary__button-bgBlack" href="/login">
                                Login
                            </a>
                            <a class="primary__button primary__button-bgBlack" href="/register">
                                Register
                            </a>
                        </div>
                    </div>
                    <div class="hamburger-menu"><span></span><span></span><span></span></div>
                </nav>
                <aside>
                    <div class="sidebar-menu">
                        <div class="close-sidebar"><span></span><span></span></div>
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('poco/assets/img/logo/logo.png') }}" alt="logo" />
                            </a>
                        </div>
                        <form class="asidesearch-bar">
                            <input type="text" name="search" />
                            <img src="{{ asset('poco/assets/img/logo/search.svg')}}" alt="search logo" />
                        </form>
                        <ul class="main-menu">
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li><a href="services.html">Mata Pelajaran</a></li>
                            <li><a href="about-us.html">Nilai</a></li>
                            <li><a href="project.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                        <a class="primary__button primary__button-bgBlack contacprimary__button" href="tel:+987 45478 547">
                            Login
                        </a>
                        <a class="primary__button primary__button-bgBlack contacprimary__button" href="tel:+987 45478 547">
                            Register
                        </a>
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
        
        <!--  FOOTER AREA -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 order-lg-0 order-4">
                            <div class="footer-area-about mb-50" data-aos="fade-up">
                                <h4>About Us</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut scelerisque arcu, at porttitor lacus. Integer.
                                </p>
                                <div class="footer-area-links">
                                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mr-lg-65 col-md-4 col-6 order-lg-0 order-md-1">
                            <div class="footer-area-lists mb-30" data-aos="fade-up" data-aos-delay="300">
                                <h4>Company</h4>
                                <ul>
                                    <li>
                                        <a href="about-us.html">About us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Careers</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Press</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 mr-lg-65 col-md-4 col-6 order-lg-0 order-2">
                            <div class="footer-area-lists mb-30" data-aos="fade-up" data-aos-delay="400">
                                <h4>Products</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Features</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">News</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Help desk</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 order-lg-0 order-md-3">
                            <div class="footer-area-lists" data-aos="fade-up" data-aos-delay="500">
                                <h4>Legal</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Return Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-shape">
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-delay="600" src="{{ asset('poco/assets/img/mask/penta-02.svg') }}" alt="shape" class="img-fluid ft-shape-01" />
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-delay="700" src="{{ asset('poco/assets/img/mask/downShape.svg') }}" alt="shape" class="img-fluid ft-shape-02" />
                    <img data-aos="fade-left" data-aos-easing="linear" data-aos-delay="500" src="{{ asset('poco/assets/img/mask/circle-01.svg') }}" alt="shape" class="img-fluid ft-shape-03" />
                </div>
            </div>
            <!-- copyright area -->
            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center copyright-area">
                        <div class="col-lg-5 col-md-4 col-sm-12">
                            <div class="copyright-area-text">
                                <p>Copyright 2024. Intan Sukma Junia - 200631100040!</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-4 col-sm-12">
                            <div class="copyright-area-top text-lg-right">
                                <a href="#header" id="to-top">Back to Top <i class="fas fa-angle-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
