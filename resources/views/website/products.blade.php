@extends('layouts.website', ['pageName' => 'product'])
@section('website-contents')
@section('title', 'Products')
@push('website-css')
@endpush
<section class="pager">
    <div class="container pager-text py-5">
        <h3 class="text-center text-white fw-bold">Product</h3>
    </div>
</section>
    <section class="py-4 mt-3">
        <div class="container">
            <div class="inner-page-header ">
                <h4>Our Products</h4> 
            </div>
            <div class="row mt-3">
                @foreach ($products as $item) 
                <div class="col-12 col-md-4 text-center col-lg-2 mb-4">
                    <div class="card  gallery-image">
                        <a href="{{route('product.details',$item->id)}}"><img src="{{ asset($item->image) }}" alt="" title="Beautiful Image" /></a>
                    </div>
                    <a href="{{ route('product.details', $item->id) }}">{{ $item->title }}</a>
                </div>
                @endforeach 
            </div>
        </div>
    </section>

@endsection