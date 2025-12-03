   <!-- Event Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Events</p>
            <h1 class="display-6 mb-4">Be a Part of a Global Movement</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            @foreach($events as $event)
                <div class="event-item h-100 p-4">
                    <img class="img-fluid w-100 mb-4" src="{{asset('template/img/event.jpg')}}" alt="">
                    <a href="#!" class="h3 d-inline-block">{{$event->title}}</a>
                    <p>{{$event->description}}</p>
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-clock text-primary me-2"></i>{{$event->time}}</p>
                        <p class="mb-1"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$event->date}}</p>
                        <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$event->address}}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Event End -->
