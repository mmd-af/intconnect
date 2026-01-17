<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <img src="{{ $event->getMedia("*")[0]->getFullUrl() }}"
                 class="img-fluid mb-4 w-100"
                 style="height: 350px; object-fit: cover;"
                 alt="{{ $event->title }}">

            <h1 class="mb-3">{{ $event->title }}</h1>

            <p class="text-muted">
                <i class="fa fa-calendar-alt text-primary me-2"></i>
                {{ $event->date->format('d/m/Y') }}

                <br>

                <i class="fa fa-clock text-primary me-2"></i>
                {{ $event->time }}

                <br>

                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                {{ $event->address }}
            </p>

            <hr>

            <p class="mt-4" style="white-space: pre-line;">
                {{ $event->description }}
            </p>

        </div>
    </div>
</div>

