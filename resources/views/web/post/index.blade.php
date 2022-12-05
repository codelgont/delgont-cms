@extends('layout.master')

@section('content')

<section class="intro pt-4 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img src="{{ $homePage->page_featured_image }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 p-4">
                <div class="page-title">
                    <h4>{{ $homePage->page_title }}</h4>
                </div>
                <div class="page-content">
                    {!! $homePage->page_content !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection