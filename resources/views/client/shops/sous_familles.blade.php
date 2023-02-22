@extends('client.shops.layout')

@section('shop')

    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        @php $banner_img = $famille->photo_famille @endphp
        <div class="single-slider relative" style="position:relative"
            style="background-image:url('{{url("/uploads/familles_imgs/$famille->photo_famille")}}');">
            <div class="overlay"><img style="width:100vw;" src={{url("/uploads/familles_imgs/$famille->photo_famille")}}></div>

            <div class="container">
                <div class="row no-gutters">

                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span class="text-white">Welcome on</span>Your Local {{ $famille->famille }}
                                            Shop</h1>
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
                                <li class="active"><a href="#">{{ $famille->famille }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->














	<!-- Start Product Area -->
<div class="product-area section">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Trending Item</h2>
            </div>
        </div>
    </div>
<div class="tab-content" id="myTabContent">
    <!-- Start Single Tab -->
    <div class="tab-pane fade show active" id="man" role="tabpanel">
        <div class="tab-single">
            <div class="row">
            @if($sous_familles->count() > 0)
            @foreach($sous_familles as $sf)
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src={{ url("/uploads/sous_familles_imgs/$sf->photo") }}
                                    alt="#">
                                <img class="hover-img" src={{ url("/uploads/sous_familles_imgs/$sf->photo") }}
                                    alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal"
                                        title="Quick View" href="#"><i
                                            class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i
                                            class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    <a title="Compare" href="#"><i
                                            class="ti-bar-chart-alt"></i><span>Add to
                                            Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href={{"/sous_famille/$sf->id"}}>View</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href={{"/famille/$famille->id/sous_famille/$sf->id"}}>{{$sf->sous_famille}}</a></h3>
                            {{-- <div class="product-price">
                                <span>Best Prices</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <div class="col-xl-3 col-lg-4 col-md-4 col-12 align-text-center">
                <h4>{{"Nothing Found 😥"}}</h4>
            </div>
            @endif

            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>
<!-- End Product Area -->




 @endsection
