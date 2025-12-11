<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel py-5">
        @foreach($sliders as $slider)
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-text">
                            <h1 class="display-1 text-uppercase mb-3">{{$slider->title}}</h1>
                            <p class="fs-5 mb-5">{{$slider->subtitle}}</p>
                            <div class="d-flex">
                                <a class="btn btn-secondary py-3 px-4" href="#contactus">Join Us Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100" src="{{ asset('storage/' . $slider->photo) }}" alt="{{$slider->title}}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>