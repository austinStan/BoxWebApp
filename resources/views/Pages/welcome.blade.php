<!-- Stored in resources/views/child.blade.php -->

@extends('master.master')
@section('title', 'Welcome')

@section('content')
<div class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center slide-bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">100% money-back
                                guarantee. Free returns!</h1>
                            {{-- <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Just Spend $50 and Get Free Shipping</p> --}}
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                <a href="industries.html" class="btn hero-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                            <img src="assets/img/hero/sell.png" alt="" class=" heartbeat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center slide-bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">100% money-back
                                guarantee.Free returns!</h1>
                            {{-- <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Just Spend $50 and Get Free Shipping</p> --}}
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                <a href="industries.html" class="btn hero-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                            <img src="assets/img/hero/sell.png" alt="" class=" heartbeat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- ? New Product Start -->
<section class="new-product-area section-padding30">
    <div class="container">
        <!-- Section tittle -->
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle mb-70">
                    <h2>Products Grid</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="assets/img/gallery/apartment.png" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="product_details.html">Bukoto Apartments</a></h3>
                        <span>UGX 1.5M monthly</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="assets/img/gallery/cow.png" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="product_details.html">Beaf Cow</a></h3>
                        <span>UGX 1.3M</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="assets/img/gallery/fridge.png" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="product_details.html">Samsung Fridge</a></h3>
                        <span>UGX 1.6M</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="assets/img/gallery/truck.png" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="product_details.html">Xente Trucks</a></h3>
                        <span>UGX 30.5M</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="assets/img/gallery/antique.png" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="product_details.html">Antique Board</a></h3>
                        <span>UGX 4.3M</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="assets/img/gallery/iphone.png" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="product_details.html">IPhone 6</a></h3>
                        <span>UGX 3.6M</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  New Product End -->
<!--? Gallery Area Start -->
<div class="gallery-area">
    <div class="container-fluid p-0 fix">
        <div class="row">
            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                <div class="single-gallery mb-30">
                    <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/booth.png);"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-gallery mb-30">
                    <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/coca.jpg);"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img"
                                style="background-image: url(assets/img/gallery/benz3.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img small-img"
                                style="background-image: url(assets/img/gallery/air.png);"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Gallery Area End -->
<!--? Popular Items Start -->
<div class="popular-items section-padding30">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-70 text-center">
                    <h2>Brand New Offers</h2>
                    {{-- <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6"> --}}
            {{-- <div class="single-popular-items mb-50 text-center"> --}}
            <div id="owl-demo" class="owl-carousel owl-theme">

                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
                <div class="item"><img src="assets/img/gallery/benz3.png" alt="Owl Image" /></div>
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn pt-70">
                <a href="catagori.html" class="btn view-btn1">SHOP NOW</a>
            </div>
        </div>
    </div>
</div>
<!-- Popular Items End -->
<!--? Video Area Start -->
{{-- <div class="video-area">
  <div class="container-fluid">
     
  </div>
</div> --}}
<!-- Video Area End -->
<!--? Watch Choice  Start-->
{{-- <div class="watch-area section-padding30">
  <div class="container"> --}}
{{-- <div class="row align-items-center justify-content-between padding-130">
          <div class="col-lg-5 col-md-6">
              <div class="watch-details mb-40">
                  <h2>Watch of Choice</h2>
                  <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                  <a href="shop.html" class="btn">Show Watches</a>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-10">
              <div class="choice-watch-img mb-40">
                  <img src="assets/img/gallery/choce_watch1.png" alt="">
              </div>
          </div>
      </div>
      <div class="row align-items-center justify-content-between">
          <div class="col-lg-6 col-md-6 col-sm-10">
              <div class="choice-watch-img mb-40">
                  <img src="assets/img/gallery/choce_watch2.png" alt="">
              </div>
          </div>
          <div class="col-lg-5 col-md-6">
              <div class="watch-details mb-40">
                  <h2>Watch of Choice</h2>
                  <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                  <a href="shop.html" class="btn">Show Watches</a>
              </div>
          </div>
      </div> --}}
{{-- </div>
</div> --}}
<!-- Watch Choice  End-->
<!--? Shop Method Start-->
<div class="shop-method-area">
    <div class="container">
        <div class="method-wrapper">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-package"></i>
                        <h6>Free Shipping Method</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-unlock"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-reload"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Method End-->
@endsection