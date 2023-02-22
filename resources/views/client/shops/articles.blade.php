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
                                <li><a href="/">Home <i class="ti-arrow-right"></i></a></li>
                                <li><a href={{"/Famille/$f->id"}}>{{ $f->famille }} <i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href={{"/sous_famille/$sf->id"}}>{{ $sf->sous_famille }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Product Style -->
        <section class="product-area shop-sidebar shop section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Categories</h3>
                                <ul class="categor-list">
                                    <li><a href="#">T-shirts</a></li>
                                    <li><a href="#">jacket</a></li>
                                    <li><a href="#">jeans</a></li>
                                    <li><a href="#">sweatshirts</a></li>
                                    <li><a href="#">trousers</a></li>
                                    <li><a href="#">kitwears</a></li>
                                    <li><a href="#">accessories</a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Shop By Price -->
                            <div class="single-widget range">
                                <h3 class="title">Shop by Price</h3>
                                <div class="price-filter">
                                    <div class="price-filter-inner">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <span>Range:</span><input type="text" id="amount" name="price"
                                                    placeholder="Add Your Price" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="check-box-list">
                                    <li>
                                        <label class="checkbox-inline" for="1"><input name="news" id="1"
                                                type="checkbox">$20 - $50<span class="count">(3)</span></label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline" for="2"><input name="news" id="2"
                                                type="checkbox">$50 - $100<span class="count">(5)</span></label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline" for="3"><input name="news" id="3"
                                                type="checkbox">$100 - $250<span class="count">(8)</span></label>
                                    </li>
                                </ul>
                            </div>
                            <!--/ End Shop By Price -->
                            <!-- Single Widget -->
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent post</h3>
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/75x75" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Girls Dress</a></h5>
                                        <p class="price">$99.50</p>
                                        <ul class="reviews">
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li><i class="ti-star"></i></li>
                                            <li><i class="ti-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/75x75" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Women Clothings</a></h5>
                                        <p class="price">$99.50</p>
                                        <ul class="reviews">
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li><i class="ti-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/75x75" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Man Tshirt</a></h5>
                                        <p class="price">$99.50</p>
                                        <ul class="reviews">
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                            <li class="yellow"><i class="ti-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Manufacturers</h3>
                                <ul class="categor-list">
                                    <li><a href="#">Forever</a></li>
                                    <li><a href="#">giordano</a></li>
                                    <li><a href="#">abercrombie</a></li>
                                    <li><a href="#">ecko united</a></li>
                                    <li><a href="#">zara</a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Shop Top -->
                                <div class="shop-top">
                                    <div class="shop-shorter">
                                        <div class="single-shorter">
                                            <label>Show :</label>
                                            <select>
                                                <option selected="selected">09</option>
                                                <option>15</option>
                                                <option>25</option>
                                                <option>30</option>
                                            </select>
                                        </div>
                                        <div class="single-shorter">
                                            <label>Sort By :</label>
                                            <select>
                                                <option selected="selected">Name</option>
                                                <option>Price</option>
                                                <option>Size</option>
                                            </select>
                                        </div>
                                    </div>
                                    <ul class="view-mode">
                                        <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                                <!--/ End Shop Top -->
                            </div>
                        </div>
                        <div class="row">
                           @if($articles->count() > 0)
                            @foreach ($articles as $ar)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img class="default-img"
                                                    src="{{url("/uploads/articles_imgs/$ar->photo")}}" alt="#">
                                                <img class="hover-img" src={{ url("/uploads/articles_imgs/$ar->photo") }}
                                                    alt="#">
                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                        href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                            Wishlist</span></a>
                                                    <a title="Compare" href="#"><i
                                                            class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="{{route('add_to_cart',$ar->id)}}">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">{{$ar->designation}}</a></h3>
                                            <div class="product-price">
                                                <span>{{$ar->prix}} DH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <div class="col-lg-4 col-md-6 col-12">
                                <h3 class="mt-5 ml-5">Nothing Found</h3>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- Modal end -->




@endsection
