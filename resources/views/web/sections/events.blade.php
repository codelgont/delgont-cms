<section class="events py-5 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 py-5">
                <h3>Other Upcoming Events</h3>
            </div>

            @if (isset($models) && count($models) > 0)
                @foreach ($models as $event)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-1 event-item">
                    <div class="row">
                        <div class="col-10 col-sm-9 col-md-9 col-lg-10 order-2">
                            <div class="set-bg rounded post-featured-image event-fatured-image shadow-md" data-setbg="{{ asset($event->featured_image) }}"></div>
                            <div class="p-2 event-text">
                                <h5 class="event-title mb-0 text-capitalize">{{ $event->title }}</h5>
                                <p class="small">
                                    {{ $event->extract_text }}
                                </p>
                                <a href="{{ route('web.events.show', ['slug' => $event->slug]) }}">find out more</a>
                            </div>
                        </div>
                        <div class="col-2 col-sm-3 col-md-3 col-lg-2 order-1 date">
                            <span class="rounded-circle bg-danger">
                                <h3 class="m-0">34</h3>
                            </span>
                            <span class="rounded-circle">DEC</span>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            @for ($i = 0; $i < 3; $i++)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-1 event-item">
                <div class="row">
                    <div class="col-10 col-sm-9 col-md-9 col-lg-10 order-2">
                        <div class="set-bg rounded event-featured-image post-featured-image shadow-md" data-setbg=""></div>
                        <div class="p-2">
                            <div class="bg-info p-2 w-100 rounded m-1"></div>
                            <div class="bg-info p-1 w-100 rounded"></div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-3 col-md-3 col-lg-2 order-1 date">
                        <span class="rounded-circle">
                            <h3 class="m-0"></h3>
                        </span>
                        <span class="rounded-circle"></span>
                    </div>
                </div>
            </div>
            @endfor
            @endif
        </div>
    </div>
</section>
