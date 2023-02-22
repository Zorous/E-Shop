@extends('client.shops.layout')


@section('shop')
    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider" style='background-image:url("{{ url('/assets/images/cart.jpg') }}");'>
            <div class="container">
                <div class="row no-gutters">

                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span class="text-white">Welcome on</span>Your Local Shop</h1>
                                        <p class="text-white">Now you can shop on the local markets on your area</p>
                                        <div class="button">
                                            <a href="#" class="btn">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->



        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="/">Home<i class="ti-arrow-right"></i></a></li>
                                {{-- <li class="active"><a href="#">{{ $articles->designation }}</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->








    <!-- Start Small Banner  -->

    <section class="small-banner container section">
        <div class="container-fluid">
            <div class="row">

                @foreach ($familles as $famille)
                    <!-- Single Banner  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-5">
                        <div class="single-banner">
                            <img src={{ url("/uploads/familles_imgs/$famille->photo_famille") }} alt="#">
                            <div class="content">
                                <p>latest products</p>
                                <h3 class="text-white">{{ $famille->famille }}</h3>
                                <a href={{"/Famille/$famille->id"}}>Discover Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- /End Single Banner  -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Small Banner -->
@endsection
