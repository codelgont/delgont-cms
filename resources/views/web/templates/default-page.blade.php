@extends('web.layout.master')

@section('title', $post->post_title)

 <!-- Header -->
 <header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ str_limit($post->post_title , 50)}}</h1>
            </div>
        </div>
    </div>
</header>


<!-- Breadcrumbs -->
@if ($post->slug)
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a>
                    @php
                        $breadcrumb = explode('/', $post->slug)
                    @endphp
                    @foreach ($breadcrumb as $key => $value)
                        @if ($loop->last)
                        <i class="fa fa-angle-double-right"></i><a href="{{ url($post->slug) }}" class="active">{{ str_limit($post->post_title , 50) }}</a>
                        @else
                        <i class="fa fa-angle-double-right"></i><a>{{ str_limit($post->post_title , 50) }}</a>
                        @endif
                    @endforeach
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
@endif
<!-- end of breadcrumbs -->

@section('content')
<section class="container-xxl py-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8">
                <div class="row">

                    <div class="col-lg-12">
                        <h3 class="text-capitalize">{{ $post->post_title }}</h3>
                        <div class="categories mb-3">
                            @if ($categories && count($categories) > 0)
                                @foreach ($categories as $category)
                                    <span class="mr-2 text-capitalize text-dark font-weight-bold"><i class="fa fa-tag mr-1 text-primary"></i>{{ $category->name }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    @if ($post->post_featured_image)
                    <div class="col-lg-12 set-bg post-featured-image" data-setbg="{{ asset($post->post_featured_image) }}"></div>
                    @endif
                    <div class="col-lg-12 py-3">
                        <div>
                            {!! $post->post_content !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 offset-lg-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque tenetur, quo totam libero repudiandae optio laudantium tempore repellendus sapiente, beatae voluptatum iusto quae doloribus molestiae cum qui corrupti placeat animi?
            </div>

        </div>
    </div>
</section>
@if ($posts && count($posts) >0)
<section class="children py-5 container-xxl bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3">
                <h4>Other Posts</h4>
            </div>
            @foreach ($posts as $post)
                <div class="col-lg-4">
                    <div class="set-bg post-featured-image rounded shadow-md border border-light" data-setbg="{{ asset($post->post_featured_image ?? 'img/default.jpg') }}"></div>
                    <div class="post-content p-2">
                        <h5 class="mb-1">{{ $post->post_title }}</h5>
                        <p class="">{{ $post->extract_text }}</p>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</section>
@endif


@endsection