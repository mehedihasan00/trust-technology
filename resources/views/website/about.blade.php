@extends('layouts.website', ['pageName' => 'about'])
@section('website-contents')
@section('title', 'About-us')
@push('website-css')
@endpush

<section class="pager" style="background-image: linear-gradient(rgba(3, 1, 10, 0.5), rgba(3, 1, 10, 0.5)), url({{ '../'. $backimage->about }});">
    <div class="container pager-text py-5">
        <h3 class="text-center text-white fw-bold">About Us</h3>
    </div> 
</section>
<section id="about-us">
<div class="container py-4">
    <div class="inner-page-header mt-3">
        <h4>About Us</h4>
    </div>
    <div class="row">
        
        {{-- <div class="col-12 col-lg-12 col-md-12 pt-3" style="position: relative"> --}}
            <div class="col-12">
                <img class src="{{ asset($about->image) }}" alt="" style="width: 40%; height: 300px; float: left; padding-right: 8px">
                <div style="text-align: just
                y">{!! $about->description !!}</div>
            </div>
        {{-- </div> --}}
        {{-- <div class="col-12 col-lg-7 col-md-8">
        </div> --}}
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