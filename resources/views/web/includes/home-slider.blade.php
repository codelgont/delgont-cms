
@if ($slides && count($slides) > 0)
<section class="home-slider">
    <div class="contain">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slides as $slide)
                <div class="carousel-item {{ ($loop->first) ? 'active' : '' }}">
                    @if ($slide->post_featured_image)
                    <img class="w-100" src="{{ asset($slide->post_featured_image ?? 'img/test.jpg') }}" alt="Image" class="" />
                    @endif
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5 mt-5">
                                    <h2 class="display-6 text-white text-capitalize mb-2 animated slideInDown">{{ $slide->post_title }}</h2>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown"></p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <button class="carousel-control-prev" type="button" data-target="#home-carousel"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#home-carousel"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@else
    
@endif