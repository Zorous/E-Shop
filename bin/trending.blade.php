
<div class="tab-content" id="myTabContent">
    <!-- Start Single Tab -->
    <div class="tab-pane fade show active" id="man" role="tabpanel">
        <div class="tab-single">
            <div class="row">
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
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">{{$sf->sous_famille}}</a></h3>
                            {{-- <div class="product-price">
                                <span>Best Prices</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Product Area -->




                    <!-- Start Shop Services Area -->
                    <section class="shop-services section home mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Start Single Service -->
                                    <div class="single-service">
                                        <i class="ti-rocket"></i>
                                        <h4>Free shiping</h4>
                                        <p>Orders over $100</p>
                                    </div>
                                    <!-- End Single Service -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Start Single Service -->
                                    <div class="single-service">
                                        <i class="ti-reload"></i>
                                        <h4>Free Return</h4>
                                        <p>Within 30 days returns</p>
                                    </div>
                                    <!-- End Single Service -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Start Single Service -->
                                    <div class="single-service">
                                        <i class="ti-lock"></i>
                                        <h4>Sucure Payment</h4>
                                        <p>100% secure payment</p>
                                    </div>
                                    <!-- End Single Service -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Start Single Service -->
                                    <div class="single-service">
                                        <i class="ti-tag"></i>
                                        <h4>Best Peice</h4>
                                        <p>Guaranteed price</p>
                                    </div>
                                    <!-- End Single Service -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Shop Services Area --> 
