<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BOX APP|HOME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('_partials.css_scripts')
</head>

<body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->
    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="top-left d-flex">
                        <div class="social-icons pull-left">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><i class="fa fa-whatsapp px-2 "></i>+256 (785) 18 9296</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="top-right text-right">
                        <ul class="list-unstyled list-inline">
                            @guest
                            <li class="list-inline-item"><a href="{{route('register')}}"><i
                                        class="fa fa-user"></i>Register</a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-share-square"></i>Checkout</a></li>
                            <li class="list-inline-item"><a href="{{route('login')}}"><i
                                        class="fa fa-lock"></i>Login</a></li>
                            @else
                            <li class="list-inline-item"><a href="#" class="text-danger" style="font-size:15px;">Hi
                                    {{Auth::user()->first_name}} </a></li>
                            <li class="list-inline-item"><a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i>
                                    Logout</a></li>
                            @endguest
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->

    <!-- Logo Area -->
    <section class="logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href=""><img src={{asset("images/box.png")}} alt="" height='60px' width='150px'></a>
                    </div>
                </div>
                <div class="col-md-5 padding-fix">
                    <form action="#" class="search-bar">
                        <input type="text" name="search-bar" placeholder="I'm looking for...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="carts-area d-flex">
                        <div class="call-box d-flex">
                            <div class="call-ico">
                                <i class="fa fa-phone fa-2x p-2"></i>
                            </div>
                            <div class="call-content">
                                <span>Call Us</span>
                                <p>+256 (759) 189 296</p>
                            </div>
                        </div>
                        <div class="cart-box ml-auto text-center">
                            <a href="" class="cart-btn">
                                <img src="images/cart.png" alt="cart">
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area -->

    <!-- Cart Body -->
    <div class="cart-body">
        <div class="close-btn">
            <button class="close-cart"><img src="images/close.png" alt="">Close</button>
        </div>
        <div class="crt-bd-box">
            <div class="cart-heading text-center">
                <h5>Shopping Cart</h5>
            </div>
            <div class="cart-content">
                <div class="content-item d-flex justify-content-between">
                    <div class="cart-img">
                        <a href=""><img src="images/cart1.png" alt=""></a>
                    </div>
                    <div class="cart-disc">
                        <p><a href="">SMART LED TV</a></p>
                        <span>1 x $199.00</span>
                    </div>
                    <div class="delete-btn">
                        <a href=""><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <div class="content-item d-flex justify-content-between">
                    <div class="cart-img">
                        <a href=""><img src="images/cart2.png" alt=""></a>
                    </div>
                    <div class="cart-disc">
                        <p><a href="">SMART LED TV</a></p>
                        <span>1 x $199.00</span>
                    </div>
                    <div class="delete-btn">
                        <a href=""><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-btm">
                <p class="text-right">Sub Total: <span>$398.00</span></p>
                <a href="#">Checkout</a>
            </div>
        </div>
    </div>
    <div class="cart-overlay"></div>
    <!-- End Cart Body -->

    @include('_partials.sticky_menu')

    <!-- Menu Area -->
    <section class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#">HOME</a></li>
                            <li class="list-inline-item"><a href="#">ABOUT US</a></li>
                            <li class="list-inline-item"><a href="#">FAQS</a></li>
                            <li class="list-inline-item"><a href="#">REVIEWS</a></li>
                            <li class="list-inline-item"><a href="#">CONTACT</a></li>
                            <li class="list-inline-item trac-btn"><a href="">Track Your Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Area -->

    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href=""><img src="images/logo.png" alt=""></a>
                            <a href=""><span>Sign In</span></a>
                            <ul class="list-unstyled">
                                <li><a href="">Home</a>
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">Home Style 1</a></li>
                                        <li><a href="02-home-two.html">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Pages</a>
                                    <ul class="list-unstyled">
                                        <li><a href="03-about-us.html">About Us</a></li>
                                        <li><a href="04-category.html">Category</a></li>
                                        <li><a href="05-single-product.html">Single Product</a></li>
                                        <li><a href="06-shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="07-checkout.html">Checkout</a></li>
                                        <li><a href="08-login.html">Log In</a></li>
                                        <li><a href="09-register.html">Register</a></li>
                                        <li><a href="10-wishlist.html">Wishlist</a></li>
                                        <li><a href="11-compare.html">Compare</a></li>
                                        <li><a href="15-track-order.html">Track Order</a></li>
                                        <li><a href="12-terms-condition.html">Terms & Condition</a></li>
                                        <li><a href="13-faq.html">Faq</a></li>
                                        <li><a href="14-404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Blog</a>
                                    <ul class="list-unstyled">
                                        <li><a href="16-blog-one.html">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.html">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.html">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="20-contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->

    <!-- Slider Area -->
    <section class="slider-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-0">
                    <div class="menu-widget">
                        <p><a href="{{route('products.index')}}" class='text-white'><i class="fa fa-bars"></i>All
                                Categories</a></p>
                        <ul class="list-unstyled">
                            @foreach($categories as $category)
                            <li><a href="{{route('products.index',['category_id'=>$category->id])}}">{{$category->name}}<i
                                        class="fa fa-angle-right"></i></a>
                                <?php $children= TCG\Voyager\Models\Category::where('parent_id',$category->id)->get();

                                ?>
                                @if($children->isNotEmpty())
                                <div class="mega-menu">
                                    <div class="row ">
                                        @foreach($children as $child)
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <a href='{{route('products.index',['category_id'=>$child->id])}}'>
                                                    <h6>{{$child->name}}</h6>
                                                </a>
                                                <?php $grandchild= TCG\Voyager\Models\Category::where('parent_id',$child->id)->get();
                                             ?>
                                                @if($grandchild->isNotEmpty())
                                                @foreach($grandchild as $gc)
                                                <a
                                                    href="{{route('products.index',['category_id'=>$gc->id])}}">{{$gc->name}}</a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 padding-fix-l20">
                    <div class="owl-carousel owl-slider">
                        <div class="slider-item slider-item1">
                            <img src="{{asset('images/banners/girl.png')}}" alt="" class="img1 wow fadeInRight effect"
                                width='564px' height='376px' data-wow-duration="1s" data-wow-delay="0s">
                            <div class="slider-box">
                                <div class="slider-table">
                                    <div class="slider-tablecell">
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                            <h5>Big Sale</h5>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                            <h2>New Product Collection</h2>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                            <p>Save Up To 25% Off</p>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                            <a href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item slider-item2">
                            <img src="{{asset('images/banners/girl2.png')}}" alt="" class="img2 wow fadeInRight effect"
                                width='564px' height='376px' data-wow-duration="1s" data-wow-delay="0s">
                            <div class="slider-box">
                                <div class="slider-table">
                                    <div class="slider-tablecell text-right">
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                            <h5>Home Appliance</h5>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                            <h2>Top Quality Products</h2>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                            <p>Save Up To 50% Off</p>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                            <a href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="slider-btm-box d-flex justify-content-around">
                            <div class="single-box mr-20">
                                <a href=""><img src="{{asset('images/sb-1.png')}}" alt="" class="img-fluid"></a>
                </div>
                <div class="single-box mr-20">
                    <a href=""><img src="{{asset('images/sb-2.png')}}" alt="" class="img-fluid"></a>
                </div>
                <div class="single-box">
                    <a href=""><img src="{{asset('images/sb-3.png')}}" alt="" class="img-fluid"></a>
                </div>
            </div> --}}
            
        </div>
        </div>
        </div>
    </section>
    <!-- End Slider Area -->

    <section class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box d-flex">
                        <div class="sr-img">
                            <img src="images/service-1.png" alt="">
                        </div>
                        <div class="">
                            <h6>Free Shipping</h6>
                            <p>Instant.Guaranteed.Safe</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box d-flex">
                        <div class="sr-img">
                            <img src="images/service-2.png" alt="">
                        </div>
                        <div class="">
                            <h6>Money Back Guarantee</h6>
                            <p>100% Sure On Box</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box d-flex">
                        <div class="sr-img">
                            <img src="images/service-3.png" alt="">
                        </div>
                        <div class="">
                            <h6>Secure Payment</h6>
                            <p>Through Mobile Money Transaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Area-->
    <section class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bt-deal">
                                <div class="sec-title">
                                    <h6>Best Deals</h6>
                                </div>
                                <div class="bt-body owl-carousel">
                                    @forelse($best_deal as $bdeals)
                                    <div class="bt-items">
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('storage/'.$bdeals->image)}}"
                                                    style="height:100px;width:100px;" alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                               <p><a href="">{{$bdeals->name}}</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">{{$bdeals->price}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>        
                                    @empty
                                    No Products Found
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ht-offer">
                                <div class="sec-title">
                                    <h6>Hot Offer</h6>
                                </div>
                                <div class="ht-body owl-carousel">
                                    <div class="ht-item">
                                        <div class="ht-img">
                                            <a href="#"><img src="{{asset('images/hotoffers/hotoffer.png')}}" alt=""
                                                    class="img-fluid"></a>
                                            <span>- 59%</span>
                                            <ul class="list-unstyled list-inline counter-box">
                                                <li class="list-inline-item">185 <p>Days</p>
                                                </li>
                                                <li class="list-inline-item">11 <p>Hrs</p>
                                                </li>
                                                <li class="list-inline-item">39 <p>Mins</p>
                                                </li>
                                                <li class="list-inline-item">51 <p>Sec</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ht-content">
                                            <p><a href="">2 bedrooms,Ntinda kampala</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">UGX 150M,negotiable</li>
                                                {{-- <li class="list-inline-item">$150.00</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-item">
                                        <div class="ht-img">
                                            <a href="#"><img src="{{asset('images/hotoffers/hotoffer2.png')}}" alt=""
                                                    class="img-fluid"></a>
                                            <span>- 59%</span>
                                            <ul class="list-unstyled list-inline counter-box">
                                                <li class="list-inline-item">185 <p>Days</p>
                                                </li>
                                                <li class="list-inline-item">11 <p>Hrs</p>
                                                </li>
                                                <li class="list-inline-item">39 <p>Mins</p>
                                                </li>
                                                <li class="list-inline-item">51 <p>Sec</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ht-content">
                                            <p><a href="">40 acres Matugga</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">UGX 100M</li>
                                                {{-- <li class="list-inline-item">$150.00</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                                <div class="hm-test">
                                    <div class="test-body owl-carousel">
                                        <div class="test-item text-center">
                                            <img src="images/test-1.jpg" alt="" class="img-fluid">
                                            <h6>John Doe</h6>
                                            <span>Photographer</span>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                        </div>
                                        <div class="test-item text-center">
                                            <img src="images/test-2.jpg" alt="" class="img-fluid">
                                            <h6>Eric Shell</h6>
                                            <span>Developer</span>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore."</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="col-md-12">
                            <div class="top-rtd">
                                <div class="sec-title">
                                    <h6>Top Rated</h6>
                                </div>
                                <div class="rt-slider owl-carousel">
                                    @foreach($top_rated as $toprated)
                                    <div class="rt-items">
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img  src="{{asset('storage/'.$toprated->image)}}"
                                                    alt="" style="height:100px;width:100px;"></a>
                                            </div>
                                            <div class="rt-content">
                                            <p><a href="">{{$toprated->name}}</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">UGX {{$toprated->price}}</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>      
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="nw-ltr">
                                <div class="sec-title">
                                    <h6>Newsletter</h6>
                                </div>
                                <div class="nw-box">
                                    <p>Sign Up And Get Latest News, Updates, Offers & Deals</p>
                                    <form class="nw-form" action="#">
                                        <input type="text" name="email" placeholder="Email Here..." required>
                                        <button type="submit" name="button">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-md-12 padding-fix-l20">
                            <div class="ftr-product">
                                <div class="tab-box d-flex justify-content-between">
                                    <div class="sec-title">
                                        <h5>Featured Product</h5>
                                    </div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="{{route('products.index')}}">All</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            @foreach($products as $product)
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="#"></a></li>
                                                        {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                                    </ul>
                                                <p><a href="">{{$product->name}}</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('storage/'.$product->image)}}"
                                                        alt="" >
                                                    {{-- <img class="sec-img img-fluid"
                                                        src="{{asset('images/BuildingMaterials/Roofing/RoofingTools/handtool.png')}}"
                                                        alt=""> --}}
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="Compare"><img
                                                                src="images/it-comp.png" alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="Favourite"><img
                                                                src="images/it-fav.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline ">
                                                        <li class="list-inline-item">UGX {{$product->price}}</li>
                                                            {{-- <li class="list-inline-item">$150.00</li> --}}
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 padding-fix-l20">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner">
                                        <a href="#"><img src="{{asset('images/banners/banner-sale.png')}}" alt=""
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner">
                                        <a href="#"><img src="{{asset('images/banners/banner1.png')}}" alt=""
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 padding-fix-l20">
                            <div class="new-product">
                                <div class="sec-title">
                                    <h5>Brand New Product</h5>
                                </div>
                                <div class="new-slider owl-carousel">
                                      @foreach($latest_products as $latest)
                                    <div class="new-item">
                                        <div class="tab-heading">
                                            {{-- <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><a href="#"></a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                            {{-- </ul> --}}
                                        <p><a href="">{{$latest->name}}</a></p>
                                        </div>
                                        <div class="new-img">
                                            <img class="main-img img-fluid"
                                                 src="{{asset('storage/'.$latest->image)}}" alt="">
                                             {{-- <img class="sec-img img-fluid"
                                                src="{{asset('images/newproducts/cement.png')}}" alt=""> --}}
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="img-content d-flex justify-content-between">
                                            <div>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">UGX {{$latest->price}}</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 padding-fix-l20">
                            <div class="banner-two">
                                <a href="#"><img src="{{asset('images/banners/banner-box.png')}}" alt=""
                                        class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-md-12 padding-fix-l20">
                            <div class="top-slr">
                                <div class="sec-title">
                                    <h5>Top Seller</h5>
                                </div>
                               
                                <div class="slr-slider owl-carousel">
                                    @forelse($top_seller as $bseller)
                                    <div class="slr-items">
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img  src="{{asset('storage/'.$bseller->image)}}"
                                                        alt="" style="height:100px;width:100px;"></a>
                                            </div>
                                            <div class="slr-content">
                                            <p><a href="">{{$bseller->name}}</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">UGX {{$bseller->price}}</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    No products Available
                                    @endforelse
                                </div>
                               
                            </div>
                        </div>
                        {{-- <div class="col-md-12 padding-fix-l20">
                                <div class="hm-blog">
                                    <div class="sec-title">
                                        <h5>Latest News</h5>
                                    </div>
                                    <div class="blog-slider owl-carousel">
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-1.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-2.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Mar, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Jan, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="#"><img src="images/news-4.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h6><a href="">Sint eius inventore magni quod.</a></h6>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">John</a></li>
                                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>12 Feb, 2020</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum tenetur soluta...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                </div>
                {{-- <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>
    <!-- End Product Area -->

    <!-- Footer Area -->

    @include('main-layout.index.footer')

    @include('_partials.js_scripts')


</body>

</html>