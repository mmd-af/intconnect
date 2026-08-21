<!-- Learn the Language Start -->
<div class="container-fluid py-5" id="language-classes">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">courses</p>
            <h1 class="display-6 font-chewy mb-4">Learn the Language</h1>
        </div>
        <div class="row g-5">
            @foreach($languages as $language)
                <div class="col-sm-6 col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item h-100">
                        <img class="w-100 img-thumbnail" src="{{ $language->getMedia("*")[0]->getFullUrl() }}"
                             alt="{{ $language->title ?? 'International Connect' }}">
                        <h3 class="font-times">{{$language->title}}</h3>
                        <p class="mb-2">{{ Str::limit($language->description, 160) }}
                            @if(strlen($language->description) > 160)
                                <a href="#" data-bs-toggle="modal" data-bs-target="#lang-modal-{{ $language->id }}">read more</a>
                            @endif
                    </div>
                </div>
                @if(strlen($language->description) > 160)
                    <div class="modal fade" id="lang-modal-{{ $language->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ $language->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $language->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
