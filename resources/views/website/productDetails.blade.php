@extends('layouts.website', ['pageName' => 'product'])
@section('website-contents')
@section('title', 'Product Details')
@push('website-css')
@endpush
<section class="pager" style="background-image: linear-gradient(rgba(3, 1, 10, 0.5), rgba(3, 1, 10, 0.5)), url({{ "../".$backimage->product }});">
    <div class="container pager-text py-5">
        <h3 class="text-center text-white fw-bold">{{ $product->title }}</h3>
    </div> 
</section>
<section class="py-4">
    <div class="container"> 
    <div class="inner-page-header mb-3">
        <h4>
          Product Name:  {{ $product->title }} 
        </h4>
    </div>
        <div class="mb-3">
            <div class="col-lg-12 col-md-12 col-12  pt-3">
                <div class="card-body">
                    <div class="principle-image" style="float: left;
                    max-width:44%;
                    padding-right: 15px;">
                        <img class="w-100" src="{{ asset($product->image) }}" alt="">
                    </div>
                    <div class="princple-message">
                        <strong>Product Name: {{ $product->title }}</strong><br>
                        <strong>Category Name: {{ $product->category->name }}</strong><br>
                        <strong>Price: {{ $product->price }}Tk</strong><br>
                        <p class="mt-3">{{ $product->shortdes }}</p>
                        <p>{!! $product->description !!}</p>
                    </div>
                   
                </div>
            </div>
    </div>
</div>
</section>
@endsection