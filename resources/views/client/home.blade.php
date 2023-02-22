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
