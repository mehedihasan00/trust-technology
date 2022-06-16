@extends('layouts.website')
@section('website-contents')
@section('title', 'News Details')
@push('website-css')
@endpush

<section class="pager">
    <div class="container pager-text py-5">
        <h3 class="text-center text-white fw-bold">{{ $news->title }}</h3>
    </div> 
</section>
<section class="py-4">
    <div class="container"> 
    <div class="inner-page-header mb-3">
        <h4>
            {{ $news->title }} 
        </h4>
        <h5 class="float-end">
            <span class="me-0">{{ $news->date }}</span>
        </h5>
    </div>
        <div class="mb-3">
            <div class="col-12 pt-3 details-news">
                <img class="float-end p-3" style="max-width: 100%; max-height: 300px" src="{{ asset($news->image) }}" alt="">
                <strong class="text-justify">{{ $news->shortdetails }}</strong>
                <p class="text-justify">{!! $news->description !!} </p>
            </div>
    </div>
</div>

</section>
@endsection