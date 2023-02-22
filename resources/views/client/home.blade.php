@extends('client.shops.layout')

@section('shop')
    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                                <li><i class="ti-email"></i> support@shophub.com</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> Store location</li>
                                <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                                <li><i class="ti-user"></i> <a href="#">My account</a></li>
                                <li><i class="ti-power-off"></i><a href="/login">Login</a></li>
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src={{ url('/assets/images/logo.png') }} style="width:240px !important;height:60px !important;" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">All Category</option>
                                    <option>watch</option>
                                    <option>mobile</option>
                                    <option>kid’s item</option>
                                </select>
                                <form>
                                    <input name="search" placeholder="Search Products Here....." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span
                                        class="total-count">2</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Necklace</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="checkout.html" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                                <ul class="main-category">
                                    <li><a href="#">New Arrivals <i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">accessories</a></li>
                                            <li><a href="#">best selling</a></li>
                                            <li><a href="#">top 100 offer</a></li>
                                            <li><a href="#">sunglass</a></li>
                                            <li><a href="#">watch</a></li>
                                            <li><a href="#">man’s product</a></li>
                                            <li><a href="#">ladies</a></li>
                                            <li><a href="#">westrn dress</a></li>
                                            <li><a href="#">denim </a></li>
                                        </ul>
                                    </li>
                                    <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a>
                                        <ul class="mega-menu">
                                            <li class="single-menu">
                                                <a href="#" class="title-link">Shop Kid's</a>
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/225x155" alt="#">
                                                </div>
                                                <div class="inner-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </li>
                                            <li class="single-menu">
                                                <a href="#" class="title-link">Shop Men's</a>
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/225x155" alt="#">
                                                </div>
                                                <div class="inner-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </li>
                                            <li class="single-menu">
                                                <a href="#" class="title-link">Shop Women's</a>
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/225x155" alt="#">
                                                </div>
                                                <div class="inner-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">top 100 offer</a></li>
                                    <li><a href="#">sunglass</a></li>
                                    <li><a href="#">watch</a></li>
                                    <li><a href="#">man’s product</a></li>
                                    <li><a href="#">ladies</a></li>
                                    <li><a href="#">westrn dress</a></li>
                                    <li><a href="#">denim </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">Product</a></li>
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">Shop<i class="ti-angle-down"></i><span
                                                            class="new">New</span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a></li>
                                                <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

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

    <!-- Start Small Banner  -->
    <div class="container mt-5">
    <section class="small-banner section">
        <div class="container-fluid">
            <div class="row">

                @foreach ($familles as $famille)
                    <!-- Single Banner  -->
                    <div class="col-lg-4 col-md-6 col-12">
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
            <div class="mx-auto text-center mt-5">
                <a href="/familles_view" style="color:#F7941D;">see more</a>
            </div>
        </div>
    </section></div>
    <!-- End Small Banner -->


{{--

    <!-- Start Product Area -->
    <div class="product-area section mb-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        {{-- 							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div> --}}

                                        	<!-- Start Most Popular -->
                                            <div class="product-area most-popular section">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="section-title">
                                                                <h2>Hot Item</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="owl-carousel popular-slider">
                                                                @foreach($sous_familles as $sf)
                                                                <!-- Start Single Product -->
                                                                <div class="single-product">
                                                                    <div class="product-img">
                                                                        <a href="product-details.html">
                                                                            <img class="default-img" src={{ url("/uploads/sous_familles_imgs/$sf->photo") }} alt="#">
                                                                            <img class="hover-img" src={{ url("/uploads/sous_familles_imgs/$sf->photo") }} alt="#">
                                                                            <span class="new">New</span>
                                                                        </a>
                                                                        <div class="button-head">
                                                                            <div class="product-action">
                                                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                                            </div>
                                                                            <div class="product-action-2">
                                                                                <a title="Add to cart" href={{"/sous_famille/$sf->id"}}>View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3><a href={{"/sous_famille/$sf->id"}}>{{$sf->sous_famille}}</a></h3>
                                                                        <div class="product-price">
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Product -->
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            class="ti-close" aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <!-- Product Slider -->
                                            <div class="product-gallery">
                                                <div class="quickview-slider-active">
                                                    <div class="single-slider">
                                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                                    </div>
                                                    <div class="single-slider">
                                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                                    </div>
                                                    <div class="single-slider">
                                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                                    </div>
                                                    <div class="single-slider">
                                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product slider -->
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="quickview-content">
                                                <h2>Flared Shift Dress</h2>
                                                <div class="quickview-ratting-review">
                                                    <div class="quickview-ratting-wrap">
                                                        <div class="quickview-ratting">
                                                            <i class="yellow fa fa-star"></i>
                                                            <i class="yellow fa fa-star"></i>
                                                            <i class="yellow fa fa-star"></i>
                                                            <i class="yellow fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#"> (1 customer review)</a>
                                                    </div>
                                                    <div class="quickview-stock">
                                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                                    </div>
                                                </div>
                                                <h3>$29.00</h3>
                                                <div class="quickview-peragraph">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                                        iste laborum ad impedit pariatur esse optio tempora sint ullam autem
                                                        deleniti nam in quos qui nemo ipsum numquam.</p>
                                                </div>
                                                <div class="size">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12">
                                                            <h5 class="title">Size</h5>
                                                            <select>
                                                                <option selected="selected">s</option>
                                                                <option>m</option>
                                                                <option>l</option>
                                                                <option>xl</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-12">
                                                            <h5 class="title">Color</h5>
                                                            <select>
                                                                <option selected="selected">orange</option>
                                                                <option>purple</option>
                                                                <option>black</option>
                                                                <option>pink</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quantity">
                                                    <!-- Input Order -->
                                                    <div class="input-group">
                                                        <div class="button minus">
                                                            <button type="button" class="btn btn-primary btn-number"
                                                                disabled="disabled" data-type="minus"
                                                                data-field="quant[1]">
                                                                <i class="ti-minus"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" name="quant[1]" class="input-number"
                                                            data-min="1" data-max="1000" value="1">
                                                        <div class="button plus">
                                                            <button type="button" class="btn btn-primary btn-number"
                                                                data-type="plus" data-field="quant[1]">
                                                                <i class="ti-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--/ End Input Order -->
                                                </div>
                                                <div class="add-to-cart">
                                                    <a href="#" class="btn">Add to cart</a>
                                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                                </div>
                                                <div class="default-social">
                                                    <h4 class="share-now">Share:</h4>
                                                    <ul>
                                                        <li><a class="facebook" href="#"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li><a class="twitter" href="#"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li><a class="youtube" href="#"><i
                                                                    class="fa fa-pinterest-p"></i></a></li>
                                                        <li><a class="dribbble" href="#"><i
                                                                    class="fa fa-google-plus"></i></a></li>
                                                    </ul>
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
