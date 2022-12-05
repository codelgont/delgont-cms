@extends('web.layout.master')

@section('title', 'Home')

@section('content')
@include('web.includes.home-slider')


<section class="bg-light">
    <div class="container">
        <div class="row py-5">
            <div class="py-5 px-3">
                <h1 class="font-weight-bolder">Hello Delgont CMS</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non quo fugit ea enim dolores harum ipsam cum, tenetur nostrum dignissimos ad hic cumque id aspernatur in! Ducimus, sunt ipsa.
                </p>
            </div>
        </div>
    </div>
</section>
@include('web.sections.services')
@endsection