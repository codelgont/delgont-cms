@extends('layout.master')

@section('content')

<section class="post pt-4 pb-3">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 post-item">
                <h3>{{ $post->post_title }}</h3>
                <div><img src="{{ asset($post->post_featured_image) }}" alt="" class="img-fluid"></div>
                <div class="pt-4">
                    {!! $post->post_content !!}
                </div>
            </div>

            <div class="col-lg-3 offset-lg-1 pt-5">
                <div class="row">
                    @if (count($others))
                        @foreach ($others as $post)
                            <div><img src="{{ asset($post->post_featured_image) }}" alt="" class="img-fluid"></div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>

@endsection