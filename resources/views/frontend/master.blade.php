<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Delwar IT</title>
    <!-- Links of CSS file -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend')}}/assets/images/favicon.ico">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('frontend')}}/assets/css/responsive.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!--Strat Preloader Area-->
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <!--End Preloader Area-->
    <a href="#" class="back2 aaa" style="display: block;"> <i class="fas fa-chevron-up" aria-hidden="true"></i> </a>

    <!--Start Laptop Menu-->
    <header class="nav-wrapper fixed-top res-static">
        <nav class="navbar navbar-expand-lg navbar-light  custom-nav">
            <div class="container">
                <div class="logo-wrap">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{url('frontend')}}/assets/images/logo2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars" style="color:#fff; font-size:25px;"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav custom-navbar ms-auto">
                        <li class="nav-item  active custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown  custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link  hvr-underline-from-left" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item   custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left" href="{{url('services')}}">Services</a>
                        </li>
                        <li class="nav-item dropdown  custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left home-nav-caret" href="#0">Admission</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('admission-form')}}">Admission Form</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('admission-procedure')}}">Admission Procedure</a>
                            </div>
                        </li>
                        <li class="nav-item  custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left" href="{{url('portfolio')}}">Portfolio</a>
                        </li>
                        <li class="nav-item  custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left" href="{{url('courses')}}">Courses</a>
                        </li>
                        <li class="nav-item  custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left" href="{{url('blogs')}}">Blogs</a>
                        </li>
                        <li class="nav-item  custom-nav-item home-nav">
                            <a class="nav-link custom-nav-link hvr-underline-from-left" href="{{url('jobs')}}">Career</a>
                        </li>
                    </ul>
                    <a class=" custom-nav-link menu-btn" href="{{url('start-project')}}">Start A Project</a>
                </div>
            </div>
        </nav>
    </header>
    <!--End Laptop Menu-->


    @yield('content')


    <!--Start Footer Area-->
    <footer class="footer-area">
        <div class="round">
            <img src="{{url('frontend')}}/assets/images/round.png" alt="" class="img-fluid">
        </div>
        <div class="round2">
            <img src="{{url('frontend')}}/assets/images/round2.png" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <a class="logo" href="/"><img src="{{url('frontend')}}/assets/images/logo2.png" alt="logo"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <ul class="social-link">
                            <li class="facebook"><a href="#" class="d-block" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#" class="d-block" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="instragram"><a href="#" class="d-block" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="linkedin"><a href="#" class="d-block" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Explore</h3>
                        <ul class="footer-links-list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('freelancers')}}">Freelancer</a></li>
                            <li><a href="{{url('entrepreneurs')}}">Enterpreneur</a></li>
                            <li><a href="{{url('login-register')}}">Start Exam</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Resource</h3>
                        <ul class="footer-links-list">
                            <li><a href="{{url('/')}}">Team</a></li>
                            <li><a href="#0">Admission</a></li>
                            <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('courses')}}">Courses</a></li>
                            <li><a href="{{url('blogs')}}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Address</h3>
                        <ul class="footer-contact-info">
                            <li><i class="fas fa-map-marked-alt"></i> <a href="#0">Blue Water Shopping City, Level 6, Zindabazar, Sylhet, Bangladesh</a></li>
                            <li><i class="fas fa-phone"></i> <a href="#0">01722892349</a></li>
                            <li><i class="far fa-envelope-open"></i> <a href="#0">info.delwarit@gmail.com</a></li>
                            <li><i class="fas fa-inbox"></i> <a href="#0">01747724236(Whatsapp)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p><i class="far fa-copyright"></i>2021 is Proudly Powered by
                            <a target="_blank" href="https://envytheme.com/">Delwar It</a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="/privacy-policy/">Privacy Policy</a></li>
                            <li><a href="/terms-of-service/">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-effect-one"></div>
        <div class="footer-effect-two"></div>
        <div class="footer-effect-three"></div>
    </footer>
    <!--End Footer Area-->

    <!-- Links of JS file -->
    <script src="{{url('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('frontend')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('frontend')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('frontend')}}/assets/js/custom.js"></script>
    <script src="{{url('frontend')}}/assets/js/jquery.appear.min.js"></script>
    <script src="{{url('frontend')}}/assets/js/magnific-popup.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @yield('footer_js')
</body>

</html>