<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>News HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('beritas/assets/img/favicon.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('beritas/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/owl.carousel.min.css')}}">

            <link rel="stylesheet" href="{{asset('beritas/assets/css/ticker-style.css')}}">

            <link rel="stylesheet" href="{{asset('beritas/assets/css/flaticon.css')}}">

            <link rel="stylesheet" href="{{asset('beritas/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/style.css')}}">
            <link rel="stylesheet" href="{{asset('beritas/assets/css/responsive.css')}}">

             <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
   </head>

   <body>


       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text"><img src="{{asset('images/logo.png')}}" alt="Logo" class="me-3" style="height: 60px;">SMK IT Baitul Aziz</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="profil" class="nav-item nav-link {{ request()->is('profil') ? 'active' : '' }}">Profil</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->is('galeri*') ? 'active' : '' }}" data-bs-toggle="dropdown">Galeri</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="galeri/foto" class="dropdown-item {{ request()->is('galeri/foto') ? 'active' : '' }}">Galeri Foto</a>
                        <a href="galeri/video" class="dropdown-item {{ request()->is('galeri/video') ? 'active' : '' }}">Galeri Video</a>
                    </div>
                </div>
                <a href="berita" class="nav-item nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                <a href="kontak" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
            </div>
       </div>
    </nav>
    <!-- Navbar End -->


    <main>
        <!-- About US Start -->
        <div class="about-area mt-5">
            <div class="container">
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <img src="{{ $berita->image }}" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>{{ $berita->judul }}</h3>
                                </div>
                                <div class="about-prea">
                                {!! $berita->konten !!}
                                </div> 
                                
                                <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                                            <li><a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-40">
                                <h3>Follow Us</h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('beritas/assets/img/news/icon-fb.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">  
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div> 
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('beritas/assets/img/news/icon-tw.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('beritas/assets/img/news/icon-ins.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('beritas/assets/img/news/icon-yo.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="{{asset('images/hero.png')}}" alt="">
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

  
    @include('layouts.footer')
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('beritas/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('beritas/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('beritas/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('beritas/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('beritas/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('beritas/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('beritas/assets/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('beritas/assets/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('beritas/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('beritas/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('beritas/assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Breaking New Pluging -->
        <script src="{{asset('beritas/assets/js/jquery.ticker.js')}}"></script>
        <script src="{{asset('beritas/assets/js/site.js')}}"></script>
		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('beritas/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('beritas/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('beritas/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('beritas/assets/js/contact.js')}}"></script>
        <script src="{{asset('beritas/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('beritas/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('beritas/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('beritas/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('beritas/assets/js/plugins.js')}}"></script>
        <script src="{{asset('beritas/assets/js/main.js')}}"></script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
        
    </body>
</html>