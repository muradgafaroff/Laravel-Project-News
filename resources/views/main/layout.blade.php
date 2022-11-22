<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NewS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: ZenBlog - v1.2.0
    * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
    * Author: BootstrapMade.com
    * License: https:///bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>News</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="dropdown"><a href="{{route('search.news')}}"><span>Category</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        @foreach($category as $cat)
                            <li><a href="{{route('page',$cat->id)}}"><i
                                        class="bi bi-chevron-right"></i> {{$cat->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="https://{{$contact->facebook}}" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="https://{{$contact->twitter}}" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="https://{{$contact->instagram}}" class="mx-2"><span class="bi-instagram"></span></a>
            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="{{route('search')}}" class="search-form" method="get">

                    <button type="submit" class="icon bi-search"></button>
                    <input type="text" name="title" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header><!-- End Header -->

@yield('content')



<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">About ZenBlog</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                    <p><a href="../../../../about.html" class="footer-link-more">Learn More</a></p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Navigation</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href="{{route('home')}}"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="{{route('search.news')}}"><i class="bi bi-chevron-right"></i>Category</a></li>
                        <li><a href="{{route('about')}}"><i class="bi bi-chevron-right"></i> About us</a></li>
                        <li><a href="{{route('contact')}}"><i class="bi bi-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h2 class="footer-heading">Address</h2>
                    <h4 class="footer-heading">{{$contact->address}}</h4>
                </div>

                <div class="col-6 col-lg-2">
                    <h2 class="footer-heading">Phone</h2>
                    <h4 class="footer-heading">{{$contact->phone}}</h4>
                </div>
                <div class="col-6 col-lg-2">
                    <h2 class="footer-heading">Email</h2>
                    <h4 class="footer-heading">{{$contact->email}}</h4>
                </div>
    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
                    </div>

                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="https://{{$contact->facebook}}" class="mx-2"><span class="bi-facebook"></span></a>
                        <a href="https://{{$contact->twitter}}" class="mx-2"><span class="bi-twitter"></span></a>
                        <a href="https://{{$contact->instagram}}" class="mx-2"><span class="bi-instagram"></span></a>
                        <a href="https://{{$contact->skype}}" class="google-plus"><i class="bi bi-skype"></i></a>
                        <a href="https://{{$contact->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../../../assets/vendor/aos/aos.js"></script>
<script src="../../../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../../../assets/js/main.js"></script>

</body>

</html>
