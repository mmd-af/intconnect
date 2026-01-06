<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ config('app.name', 'International Connect') }}</title>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

    <!-- Favicon -->
    <link href="{{asset('template/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Open+Sans&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

{{--    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))--}}
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    @endif--}}

<!-- Libraries Stylesheet -->
    <link href="{{asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">

    @livewireStyles

</head>

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-secondary top-bar wow fadeIn" data-wow-delay="0.1s">
    <div class="row align-items-center h-100">
        <div class="col-lg-4 text-center text-lg-start">
            <a href="{{url('/')}}">
                <h1 class="display-6 text-primary m-0">International Connect</h1>
            </a>
        </div>
        <div class="col-lg-8 d-none d-lg-block">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0 btn-square bg-primary">
                            <i class="fa fa-phone-alt text-dark"></i>
                        </div>
                        <div class="ms-2">
                            <h6 class="text-primary mb-0">Call Us</h6>
                            <span class="text-white">+40 123 456789</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0 btn-square bg-primary">
                            <i class="fa fa-envelope-open text-dark"></i>
                        </div>
                        <div class="ms-2">
                            <h6 class="text-primary mb-0">Mail Us</h6>
                            <span class="text-white">info@intconnect.ro</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0 btn-square bg-primary">
                            <i class="fa fa-map-marker-alt text-dark"></i>
                        </div>
                        <div class="ms-2">
                            <h6 class="text-primary mb-0">Address</h6>
                            <span class="text-white">Strada Amilcar C. Săndulescu 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
            <h4 class="d-lg-none m-0">Menu</h4>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="#about-us" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-auto">
                    <a class="btn btn-square btn-dark ms-2"
                       href="https://www.instagram.com/internationalconnect.bucharest/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-dark ms-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-dark ms-2" href="#!"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


 @yield('content')


<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Strada Amilcar C. Săndulescu 3</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@intconnect.ro</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="#about-us">About Us</a>
                <a class="btn btn-link" href="#contact">Contact Us</a>
                <a class="btn btn-link" href="#service">Our Services</a>
                <a class="btn btn-link" href="#contact">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Business Hours</h4>
                <p class="mb-1">Monday - Friday</p>
                <h6 class="text-light">09:00 am - 07:00 pm</h6>
                <p class="mb-1">Saturday</p>
                <h6 class="text-light">09:00 am - 12:00 pm</h6>
                <p class="mb-1">Sunday</p>
                <h6 class="text-light">Closed</h6>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Gallery</h4>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{asset('template/img/gallery-1.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{asset('template/img/gallery-2.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{asset('template/img/gallery-3.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{asset('template/img/gallery-4.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{asset('template/img/gallery-5.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{asset('template/img/gallery-6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pt-5">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#!">intconnect.ro</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('template/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('template/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('template/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/lib/counterup/counterup.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('template/js/main.js')}}"></script>
@livewireScripts
</body>
</html>
