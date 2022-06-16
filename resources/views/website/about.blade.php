@extends('layouts.website', ['pageName' => 'about'])
@section('website-contents')
@section('title', 'About-us')
@push('website-css')
@endpush

<section class="pager">
    <div class="container pager-text py-5">
        <h3 class="text-center text-white fw-bold">About Us</h3>
    </div> 
</section>
<section>
<div class="container py-4">
    <div class="inner-page-header mt-3">
        <h4>About Us</h4>
    </div>
    <div class="row">
        
        <div class="col-12 col-lg-5 col-md-4 pt-3">
            <img class="w-100" src="{{ asset($about->image) }}" alt="">
        </div>
        <div class="col-12 col-lg-7 col-md-8">
            <div class="pt-3">
                
                {!! $about->description !!}
            </div>
        </div>
        <div class="col-12">
            <div class="inner-page-header mt-4 ">
                <h4>Our Mission & Vision</h4>
            </div>
            <div>
                {!! $about->mission !!}
            </div>
        </div>
        <div class="col-12">
            <div class="inner-page-header ">
                <h4>Our Trams & Condition</h4>
            </div>
            <div>
                {!! $about->trams !!}
            </div>
        </div>
    </div>
</div>
</section>
@endsection