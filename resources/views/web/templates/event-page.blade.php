@extends('web.layout.master')

@section('title', $model->title.' - Upcoming Events')

@section('content')

     <!-- Header -->
 <header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1></h1>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs text-capitalize">
                    <a href="url('home')">Home</a>
                        <i class="fa fa-angle-double-right"></i> <a href="{{ url(config('web.events.route_prefix', 'upcoming-events')) }}">Upcoming Events</a>
                        <i class="fa fa-angle-double-right"></i> <a href="{{ url(config('web.events.route_prefix', 'upcoming-events')) }}" class="">{{ str_limit($model->title, 50) }}</a>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic -->

<section class="page event-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class=" text-capitalize">{{ $model->title }}</h2>
                <div class="set-bg rounded post-featured-image event-fatured-image shadow-md py-3" data-setbg="{{ asset($model->featured_image) }}"></div>
                <div class="p-2">
                    {!! $model->content !!}
                </div>
            </div>
        </div>
    </div>
</section>



@include('web.sections.events')

@endsection