<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/image/logo.png" type="image/gif" sizes="16x16">
    <title>{{ $content->name }} | @yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('content/website/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('content/website/css/simple-lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('content/website/css/owl.carousel.min.css')}}" />
    <link href="{{ asset('content/website/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('content/website/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('content/website/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    @stack('website-css')
</head>

<body>
    <!-- Start Navbar section -->
    <section class="border-bottom bg-header-top">
        <div class="container-fluid my-container">
            <div class="row header-top"> 
            <div class="col-lg-6 col-md-6 col-12 vertical-align center-align">
                <p class="mb-0 py-2" style="font-size:13px"><i class="fas fa-phone"></i> {{ $content->phone }} &nbsp;</p>
                <p class="mb-0 py-2" style="font-size:13px "><i class="fas fa-envelope"></i> {{ $content->email }}</p>
            </div>
            <div class="col-12 col-lg-6 col-md-6  vertical-align justify-content-end center-align">
                <ul class="header-social d-flex ">
                    <li><a class="" href="{{$content->facebook }}" title="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="pl-2"><a class="" href="{{$content->twitter }}" title="twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="pl-2"><a class="" href="{{$content->linkedin }}" title="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="pl-2"><a class="" href="{{$content->instagram }}" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </div>
        </div>
        </div>
    </section>
    <section class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-0">
            <div class="container-fluid my-container">
                <a class="navbar-brand" href="{{ route('home') }}"><img style="height: 50px; border-radius:4%" src="{{ asset($content->logo) }}" alt="">
                        
                   </a>
                   <div id="typed-strings">
                   
                  </div>
                  <span id="typed"></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 250px;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('website.about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('website.products') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('website.gallery') }}">Photo Gellary</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('website.committee') }}">Managment</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('website.news') }}">News</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                  
                </div>
            </div>
        </nav>
    </section>
    <!-- End Navbar section -->
    <!-- Client section end -->
    @yield('website-contents') 
    <!-- footer -->
    <footer>
        <section class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="footer-content">
                            <h3 class="text-light">{{ $content->name }}</h3>
                            <p class="pt-2 text-white">{{Str::limit($content->about, 200)  }}
                            </p>
                        </div>
                        <div id="typed">

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-6 mb-4">
                        <span class="text-white border-bottom">Quick Menu</span>
                        <div class="quick-menu">
                            <ul class="mt-3">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('website.about') }}">About</a></li>
                                <li><a href="{{ route('website.gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('website.committee') }}">Management
                                </a></li>
                               
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <div class="footer-content">
                            <span class="text-white border-bottom">Contact Info</span>
                            <ul class="mt-3 contact-info">
                                <li class="mb-2"><i class="fa fa-map-marker-alt"></i> {{ $content->address }}</li>
                                <li class="mb-2"><i class="fa fa-phone"></i> {{ $content->phone }}</li>
                                <li class="mb-2"><i class="fa fa-envelope"></i> {{ $content->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 mb-4">
                        <span class="text-white border-bottom">Flow us</span>
                            <div class="form-group subscribe">
                                <ul class="footer-social d-flex mt-3">
                                    <li><a class="" href="{{$content->facebook }}" title="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="pl-2"><a class="" href="{{$content->twitter }}" title="twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="pl-2"><a class="" href="{{$content->linkedin }}" title="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="pl-2"><a class="" href="{{$content->instagram }}" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="pl-2"><a class="" href="mailto:{{ $content->email }}" title="envelope" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- footer area end -->
        <!-- footer bottom start -->
        <section class="footer-botttom border-top py-1">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-6 col-md-6 col-12 vertical-align center-align">
                        <p class="mb-0 py-2">Copyright © 2021  all rights reserved <a href="" target="_blank">{{$content->name}}</a></p>
                       
                    </div>
                    <div class="col-12 col-lg-6 col-md-6  vertical-align justify-content-end center-align">
                        Desing and Develop &nbsp;  <a href="http://linktechbd.com/" target="_blank"> Link-Up Technology</a>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- All script -->
    <script src="{{ asset('content/website/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('content/website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('content/website/js/typed.js')}}"></script>
    <script src="{{ asset('content/website/js/all.min.js') }}"></script>
    <script src="{{ asset('content/website/js/owl.carousel.min.js') }}"></script>
    @stack('website-js')
    <script>
        $('.mobile-menu').on('click',function(){
            $('.main-menu').slideToggle();
        });
    </script>
    <script>
         var typed6 = new Typed('#typed', {
            strings: ['{{ $content->name }}'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        });
    </script>
    
    <script>
        $(document).ready(function() {
            // add all to same gallery
            $(".gallery a").attr("data-fancybox", "mygallery");
            // assign captions and title from alt-attributes of images:
            $(".gallery a").each(function() {
                $(this).attr("data-caption", $(this).find("img").attr("alt"));
                $(this).attr("title", $(this).find("img").attr("alt"));
            });
            // start fancybox:
            $(".gallery a").fancybox();
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".gallery a").fancybox();
        });
    </script>
   <script>
       $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    })
   </script>
   <script>
       $('.more-category').on('click',function(){
           $('.category-last').slideToggle();
       })
   </script>
</body>

</html>