@extends('client.layout')

@section('content')


         <!-- banner bg main start -->
         <div class="banner_bg_main">
            <!-- header top section start -->
            <div class="container">
               <div class="header_section_top">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="custom_menu">
                           <ul>
                              <li><a href="#">Best Sellers</a></li>
                              <li><a href="#">Gift Ideas</a></li>
                              <li><a href="#">New Releases</a></li>
                              <li><a href="#">Today's Deals</a></li>
                              <li><a href="#">Customer Service</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- header top section start -->
            <!-- logo section start -->
            <div class="logo_section">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="logo"><a href="index.html"><img src={{ url("/assets/images/logo.png")}} width="120px" height="60px"></a></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- logo section end -->
            <!-- header section start -->
            <div class="header_section">
               <div class="container">
                  <div class="containt_main">
                     <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.html">Home</a>
                        <a href="fashion.html">Fashion</a>
                        <a href="electronic.html">Electronic</a>
                        <a href="jewellery.html">Jewellery</a>
                     </div>
                     <span class="toggle_icon" onclick="openNav()"><img src={{ url("/assets/images/toggle-icon.png")}}></span>
                     <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </div>
                     <div class="main">
                        <!-- Another variation with a button -->
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search this blog">
                           <div class="input-group-append">
                              <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                              <i class="fa fa-search"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="header_box">
                        <div class="lang_box ">
                           <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                           <img src={{url("/assets/images/flag-uk.png")}} alt="" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                           </a>
                           <div class="dropdown-menu ">
                              <a href="#" class="dropdown-item">
                              <img src={{url("/assets/images/flag-france.png")}} class="mr-2" alt="">
                              French
                              </a>
                           </div>
                        </div>
                        <div class="login_menu">
                           <ul>
                              <li><a href="#">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 <span class="padding_10">Cart</span></a>
                              </li>
                              <li><a href='/login'>
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <span class="padding_10">login</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- header section end -->
            <!-- banner section start -->
            <div class="banner_section layout_padding">
               <div class="container">
                  <div id="my_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="row">
                              <div class="col-sm-12">
                                 <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                 <div class="buynow_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="row">
                              <div class="col-sm-12">
                                 <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                 <div class="buynow_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="row">
                              <div class="col-sm-12">
                                 <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                 <div class="buynow_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!-- banner section end -->
         </div>
         <!-- banner bg main end -->

<div>
    <div class="fashion_section mt-5">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="container">
               @foreach($familles as $f)
                      <div style="background:url({{url("/uploads/familles_imgs/$f->photo_famille")}});backgroundPosition:center;width:100%;height:120px;filter:blur(2px);font-size:42px;">
                        <h1 class="fashion_taital text-white mt-5">
                          {{$f->famille}}
                        </h1>
                      </div>

                     <div>
                      <div class="fashion_section_2">
                        <div class="row">
                            @foreach($sous_familles as $sf)
                            @if($f->id == $sf->famille_id)

                                <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">
                                      {{$sf->sous_famille}}
                                    </h4>
                                    <p class="price_text">
                                      Price
                                      <span style="color:#262626">
                                        30
                                      </span>
                                    </p>
                                    <div class="tshirt_img">
                                      <img
                                        alt={{$sf->photo}}
                                        src={{url("/uploads/sous_familles_imgs/$sf->photo")}}
                                      />
                                    </div>
                                    <div class="btn_main">
                                      <div class="buy_bt">
                                        <span style="color:#262626">Order Now</span>
                                      </div>
                                      <div class="seemore_bt">
                                      <a href="{{"/sous_famille/$sf->id"}}" style="color:#f26522;">
                                      See More
                                    </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                @endif
                                @endforeach

                        </div>
                      </div>
                    </div>
                      <a
                        class="carousel-control-prev"
                        href="#electronic_main_slider"
                        role="button"
                        data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a
                        class="carousel-control-next"
                        href="#electronic_main_slider"
                        role="button"
                        data-slide="next">
                        <i class="fa fa-angle-right"></i>
                      </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

</div>

@endsection
