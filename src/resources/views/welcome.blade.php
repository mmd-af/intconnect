@extends('layouts.app')

@section('content')

    <!-- Carousel Start -->
    @livewire('slider-list')
    <!-- Carousel End -->

    <!-- Video Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-11">
                    <div class="h-100 py-5 d-flex align-items-center">
                        {{--                    <button type="button" class="btn-play" data-bs-toggle="modal"--}}
                        {{--                            data-src="https://www.youtube.com/embed/dMCkWVSOabU" data-bs-target="#videoModal">--}}
                        {{--                        <span></span>--}}
                        {{--                    </button>--}}
                        <h3 class="ms-5 mb-0">Together, we can build a world where everyone has the chance to thrive.
                        </h3>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-1">
                    <div class="h-100 w-100 bg-secondary d-flex align-items-center justify-content-center">
                        <span class="text-white" style="transform: rotate(-90deg);">Scroll Down</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->

    <!-- Video Modal Start -->
    {{--<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--    <div class="modal-dialog">--}}
    {{--        <div class="modal-content rounded-0">--}}
    {{--            <div class="modal-header">--}}
    {{--                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>--}}
    {{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
    {{--            </div>--}}
    {{--            <div class="modal-body">--}}
    {{--                <div class="ratio ratio-16x9">--}}
    {{--                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen--}}
    {{--                            allowscriptaccess="always" allow="autoplay"></iframe>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="about-us">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid w-100" src="{{asset('template/img/about.jpg')}}" alt="International Connect">
                </div>
                <div class="col-lg-6">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Join Hands, Change the World</h1>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">We’re a community that loves people and enjoys
                        helping
                        friends — and future friends — from around the world who come to study, work, and live in
                        Romania.
                        We create a space where people from different countries can connect, integrate, feel at home in
                        Bucharest, and grow together.</p>
                    <div class="row g-4 pt-2">
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                            <div class="h-100 text-start">
                                <h3>What we offer</h3>
                                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Romanian and English
                                    language practice groups.</p>
                                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Activities and
                                    community
                                    events where you can meet people and make friends.</p>
                                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Trips.</p>
                                <p class="text-dark mb-4"><i class="fa fa-check text-primary me-2"></i>Personal
                                    development
                                    (programs that help you achieve your goals).</p>
                                <div class="text-start">
                                    <a class="btn btn-secondary py-2 px-4" href="#!">Join us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Our values Start -->
    <div class="container-fluid py-5" id="our-values">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-title">
                        <h1 class="display-6 mb-4">Our values</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row g-5">
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa-solid fa-circle-nodes fa-2x text-secondary"></i>
                                </div>
                                <h3>Connection</h3>
                                <p class="mb-2">We build bridges between cultures and backgrounds, creating a welcoming
                                    environment where lasting friendships can grow.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa-solid fa-arrow-up-right-dots fa-2x text-secondary"></i>
                                </div>
                                <h3>Growth</h3>
                                <p class="mb-2">We value continual learning and personal development in every area of
                                    life.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa-solid fa-arrow-right-to-city fa-2x text-secondary"></i>
                                </div>
                                <h3>Initiative</h3>
                                <p class="mb-2">We believe in mutual giving and participation, where everyone
                                    contributes
                                    and takes part in building up our community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our values End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
                <h1 class="display-6 mb-4">Meet the team</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item d-flex h-100 p-4">
                        <div class="team-detail pe-4">
                            <img class="img-fluid mb-4" src="{{asset('template/img/team-1.jpg')}}" alt="">
                            <h3>Andreea Peteu</h3>
{{--                            <span>Founder & CEO</span>--}}
                        </div>
                        <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item d-flex h-100 p-4">
                        <div class="team-detail pe-4">
                            <img class="img-fluid mb-4" src="{{asset('template/img/team-2.jpg')}}" alt="">
                            <h3>Miha</h3>
{{--                            <span>Project Manager</span>--}}
                        </div>
                        <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item d-flex h-100 p-4">
                        <div class="team-detail pe-4">
                            <img class="img-fluid mb-4" src="{{asset('template/img/team-3.jpg')}}" alt="">
                            <h3>Adriana</h3>
{{--                            <span>Volunteer</span>--}}
                        </div>
                        <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="testimonial-title">
                        <h1 class="display-6 mb-4">what they say...</h1>
                        <p class="fs-5 mb-0">We work to bring smiles, hope, and a brighter future to those in need.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('template/img/testimonial-1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">I am honored to have met people from other countries in
                                            international relations classes. It was really gratifying for me. You know,
                                            it was like a therapy session, soothing and motivating.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Hamidreza</h5>
                                                {{--                                                <span>CEO, Founder</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('template/img/testimonial-2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">When I lived in Iran, I had no contact with people outside my
                                            country. It may seem ridiculous to you, but one of my dreams was to connect
                                            with people from other countries, and getting to know people from different
                                            cultures was exciting and a dream for me. When I was younger, I read a book
                                            about a city where people of different nationalities and religions lived
                                            happily together. My dream was to live in that city, and now I am living my
                                            dream. Last week's event was like a group therapy for me. It was a therapy.
                                            When you sit around a table with people from different countries and listen
                                            to their empty talk and understand them and are understood, you realize that
                                            you are not alone, and that means a sense of closeness to people who are not
                                            your nationality but who are with you.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Mariam</h5>
                                                {{--                                                <span>CEO, Founder</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('template/img/testimonial-3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">I joined international student connect the moment I came into
                                            România, and the group has profoundly impacted my life, teaching me Romanian
                                            and providing invaluable support. Their guidance has been instrumental in
                                            helping me navigate and thrive in this new environment.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Whitney</h5>
                                                {{--                                                <span>CEO, Founder</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Banner Start -->
    <div class="container-fluid banner py-5">
        <div class="container">
            <div class="banner-inner bg-light p-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="row justify-content-center">
                    <div class="col-lg-8 py-5 text-center">
                        <h1 class="display-6 wow fadeIn" data-wow-delay="0.3s">Come and see!</h1>
                        <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Alias aliquam animi aspernatur autem commodi consequuntur dicta error ex
                            explicabo laudantium natus nesciunt nostrum nulla perferendis placeat tempore, temporibus
                            veniam
                            veritatis.</p>
                        <div class="d-flex justify-content-center wow fadeIn" data-wow-delay="0.7s">
                            <a class="btn btn-secondary py-3 px-4" href="#contact">Join Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Learn the Language Start -->
    <div class="container-fluid py-5" id="our-values">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Course</p>
                <h1 class="display-6 mb-4">Learn the Language</h1>
            </div>
            <div class="row g-5">
                <div class="col-sm-6 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item h-100">
                        <div class="btn-square bg-light mb-4">
                            <i class="fa-solid fa-circle-nodes fa-2x text-secondary"></i>
                        </div>
                        <h3>Language</h3>
                        <p class="mb-2">Description about the language.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item h-100">
                        <div class="btn-square bg-light mb-4">
                            <i class="fa-solid fa-circle-nodes fa-2x text-secondary"></i>
                        </div>
                        <h3>Language</h3>
                        <p class="mb-2">Description about the language.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item h-100">
                        <div class="btn-square bg-light mb-4">
                            <i class="fa-solid fa-circle-nodes fa-2x text-secondary"></i>
                        </div>
                        <h3>Language</h3>
                        <p class="mb-2">Description about the language.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="service-item h-100">
                        <div class="btn-square bg-light mb-4">
                            <i class="fa-solid fa-circle-nodes fa-2x text-secondary"></i>
                        </div>
                        <h3>Language</h3>
                        <p class="mb-2">Description about the language.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn the Language -->

    @livewire('event-list')

    @livewire('contact-form')

    <!-- Newsletter Start -->
    {{--    @livewire('subscription-form')--}}
    <!-- Newsletter End -->

    <!-- Gallery Start -->
    <div class="container-fluid p-0 wow fadeIn mt-5" data-wow-delay="0.1s" id="gallery">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Gallery</p>
        </div>
        <div class="owl-carousel general-carousel gallery-carousel py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100 img-thumbnail" src="{{asset('template/img/gallery-1.jpg')}}"
                                 alt="International Connect">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100 img-thumbnail" src="{{asset('template/img/gallery-2.jpg')}}"
                                 alt="International Connect">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100 img-thumbnail" src="{{asset('template/img/gallery-3.jpg')}}"
                                 alt="International Connect">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100 img-thumbnail" src="{{asset('template/img/gallery-4.jpg')}}"
                                 alt="International Connect">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100 img-thumbnail" src="{{asset('template/img/gallery-5.jpg')}}"
                                 alt="International Connect">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100 img-thumbnail" src="{{asset('template/img/gallery-6.jpg')}}"
                                 alt="International Connect">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Start -->

@endsection
