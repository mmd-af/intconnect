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
                        <h3 class="ms-5 mb-0">Together, we can build a community where everyone has the chance to
                            thrive.
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

    <!-- About Start -->
    <div class="container-fluid py-5" id="about-us">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-thumbnail w-100" src="{{asset('template/img/about.jpg')}}"
                         alt="International Connect">
                </div>
                <div class="col-lg-6">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">We’re a community that loves people and enjoys
                        helping
                        friends — and future friends — from around the world who come to study, work, and live in
                        Romania.
                        We create a space where people from different countries can connect, integrate, feel at home in
                        Bucharest, and grow together.</p>
                    <div class="row g-4 pt-2">
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                            <div class="h-100 text-start">
                                <h3 class="font-times">What we offer</h3>
                                <p><i class="fa fa-check text-primary me-2"></i>Romanian and English
                                    language practice groups.</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Activities and
                                    community
                                    events where you can meet people and make friends.</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Personal
                                    development
                                    (programs that help you achieve your goals).</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Opportunities to
                                    volunteer.</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Trips.</p>
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
                        <h1 class="display-6 font-chewy mb-4">Our values</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row g-5">
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa-solid fa-circle-nodes fa-2x text-secondary"></i>
                                </div>
                                <h3 class="font-times">Connection</h3>
                                <p class="mb-2">We build bridges between cultures and backgrounds, creating a welcoming
                                    environment where lasting friendships can grow.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa-solid fa-arrow-up-right-dots fa-2x text-secondary"></i>
                                </div>
                                <h3 class="font-times">Growth</h3>
                                <p class="mb-2">We value continual learning and personal development in every area of
                                    life.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa-solid fa-arrow-right-to-city fa-2x text-secondary"></i>
                                </div>
                                <h3 class="font-times">Initiative</h3>
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
                <h1 class="display-6 font-chewy mb-4">Meet the team</h1>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4">
                <!-- Miha -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center rounded-4">
                        <img src="{{asset('template/img/miha.jpg')}}" class="card-img-top rounded-top-4" alt="Miha">
                        <div class="card-body px-3 py-3">
                            <h6 class="fw-bold font-times mb-1">Miha</h6>
                            <p class="small text-success fw-semibold mb-2"><i class="bi bi-mortarboard-fill me-1"></i>Agricultural
                                Engineering · Teaching English as a second language</p>
                            <p class="text-muted small mb-2"><i class="bi bi-globe2 me-1"></i>Lived overseas for 17
                                years</p>
                            <p class="fst-italic text-muted small">"I like to learn languages, learn about different
                                cultures, read and paint."</p>
                        </div>
                    </div>
                </div>

                <!-- Milad -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center rounded-4">
                        <img src="{{asset('template/img/milad.jpg')}}" class="card-img-top rounded-top-4" alt="Milad">
                        <div class="card-body px-3 py-3">
                            <h6 class="fw-bold font-times mb-1">Milad</h6>
                            <p class="small text-success fw-semibold mb-2"><i class="bi bi-mortarboard-fill me-1"></i>Civil
                                Engineering</p>
                            <p class="text-muted small mb-2"><i class="bi bi-globe2 me-1"></i>Lives in Romania since
                                2019</p>
                            <p class="fst-italic text-muted small">"I like sports and traveling. My dream destination is
                                Brazil."</p>
                        </div>
                    </div>
                </div>

                <!-- Fadi -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center rounded-4">
                        <img src="{{asset('template/img/fadi.jpg')}}" class="card-img-top rounded-top-4" alt="Fadi">
                        <div class="card-body px-3 py-3">
                            <h6 class="fw-bold font-times mb-1">Fadi</h6>
                            <p class="small text-success fw-semibold mb-2"><i class="bi bi-mortarboard-fill me-1"></i>Architecture
                                and Interior Design</p>
                            <p class="text-muted small mb-2"><i class="bi bi-globe2 me-1"></i>Lives in Romania since
                                2020</p>
                            <p class="fst-italic text-muted small">"I like lego and football. My favorite team is
                                Barcelona!"</p>
                        </div>
                    </div>
                </div>

                <!-- Adriana -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center rounded-4">
                        <img src="{{asset('template/img/adriana.jpg')}}" class="card-img-top rounded-top-4" alt="Adriana">
                        <div class="card-body px-3 py-3">
                            <h6 class="fw-bold font-times mb-1">Adriana</h6>
                            <p class="small text-success fw-semibold mb-2"><i class="bi bi-mortarboard-fill me-1"></i>Veterinary
                                medicine · Teaching English as a second language</p>
                            <p class="text-muted small mb-2"><i class="bi bi-globe2 me-1"></i>Lived 10 years overseas
                            </p>
                            <p class="fst-italic text-muted small">"I like history, medicine and baking."</p>
                        </div>
                    </div>
                </div>

                <!-- Andreea -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm text-center rounded-4">
                        <img src="{{asset('template/img/andreea.jpg')}}" class="card-img-top rounded-top-4" alt="Andreea">
                        <div class="card-body px-3 py-3">
                            <h6 class="fw-bold font-times mb-1">Andreea</h6>
                            <p class="small text-success fw-semibold mb-2"><i class="bi bi-mortarboard-fill me-1"></i>Accounting
                                · Coach</p>
                            <p class="text-muted small mb-2"><i class="bi bi-globe2 me-1"></i>International student in
                                the USA</p>
                            <p class="fst-italic text-muted small">"I like sports, nature and photography."</p>
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
                        <h1 class="display-6 font-chewy mb-4">What they say...</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
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
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">When I lived in Iran, I had no contact with people outside my
                                            country. It may seem ridiculous to you, but one of my dream was to connect
                                            with people from other countries. Now I am living my dream. Last week's
                                            event was like a group therapy for me. When you sit around a table with
                                            people from different countries and listen to them speak and understand them
                                            and you are understood, you realize that you are not alone, and that means a
                                            sense of closeness to people who are not your nationality but who are with
                                            you.</p>
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
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
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
                        <h1
                            class="display-6 font-chewy wow fadeIn my-5"
                            data-wow-delay="0.3s"
                            style="font-size: calc(2rem + 2vw);">Come and see!</h1>
                        <div class="d-flex justify-content-center wow fadeIn" data-wow-delay="0.7s">
                            <a class="btn btn-secondary py-3 px-4" href="#contact">Join Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    @livewire('language-list')

    @livewire('event-list')

    @livewire('contact-form')

    <!-- Newsletter Start -->
    {{--    @livewire('subscription-form')--}}
    <!-- Newsletter End -->

    @livewire('gallery-list')

@endsection
