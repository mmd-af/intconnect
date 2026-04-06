<div class="container-fluid p-0 wow fadeIn mt-5" data-wow-delay="0.1s" id="gallery">
    <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">Gallery</p>
    </div>
    <div class="owl-carousel general-carousel gallery-carousel py-5">
        @foreach($galleries->chunk(2) as $chunk)
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    @foreach($chunk as $gallery)
                        <div class="col-lg-6">
                            <div class="carousel-img">
                                <img class="w-100 img-thumbnail" src="{{ $gallery->getMedia("*")[0]->getFullUrl() }}"
                                     alt="{{ $gallery->title ?? 'International Connect' }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
