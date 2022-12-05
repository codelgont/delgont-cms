@extends('layout.master')

@section('content')
<section class="page pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3>{{ $page->page_title }}</h3>
                <div>{!! $page->page_content !!}</div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset($page->page_featured_image) }}" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<section class="posts pt-5 pb-3">
    <div class="container">
        <div class="row">
            @if (count($posts))
                @foreach ($posts as $post)
                    <div class="col-lg-4 post-item">
                        <div class="post-featured-image">
                            <img src="{{ asset($post->post_featured_image) }}" alt="" class="img-fluid" />
                        </div>
                        <div class="post-title">
                            <h4>{{ $post->post_title }}</h4>
                        </div>
                        <div>
                            <p>{{ $post->extract_text }}</p>
                            <a href="{{ route('web.page.posts.show', ['page' => url_format($page->page_key), 'postkey' => $post->post_key]) }}" class="btn btn-md btn-primary">{{ $post->post_key }}</a>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            @endif
        </div>
    </div>
</section>
@endsection