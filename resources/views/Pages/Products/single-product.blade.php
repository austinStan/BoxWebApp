@extends('Pages.index')

@section('title', $single_product->name)

@section('content')
<!-- Top Bar 2 -->
@include('_partials.scrollable')
<!-- End Top Bar 2 -->
<!-- Logo Area 2 -->
@include('_partials.logo_area')
<!-- End Logo Area 2 -->

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

   
        <!-- End Logo Area 2 -->

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

        <!-- Sticky Menu -->
             @include('_partials.sticky_menu')
        <!-- End Sticky Menu -->

        <!-- Menu Area 2 -->
        @include('_partials.menu_area')
        <!-- End Menu Area 2 -->

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

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="">Home</a></li>
                            <li class="list-inline-item"><span>||</span>{{$single_product->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Single Product Area -->
        <section class="sg-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="sg-img">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                                            <img src="{{asset('storage/'.$single_product->image)}}"
                                            height='700px' width='650px' alt='' class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="nav d-flex justify-content-between">
                                        @if($single_product->images)
                                        @foreach(json_decode($single_product->images,true) as $image)
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#sg1">
                                        <img class="img-fluid" src="{{asset('storage/'.$image)}}" alt="">
                                    </a>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="sg-content">
                                    <div class="pro-tag">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">Home Appliance ,</a></li>
                                            <li class="list-inline-item"><a href="">Smart Led Tv</a></li>
                                        </ul>
                                    </div>
                                     <div class="pro-name">
                                         <p>Samsung Smart Led Tv With Speaker</p>
                                     </div>
                                     <div class="pro-rating">
                                         <ul class="list-unstyled list-inline">
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                             <li class="list-inline-item"><a href="">( 09 Review )</a></li>
                                         </ul>
                                     </div>
                                     @if($single_product->old_price==null)
                                     <li class="list-inline-item">UGX {{$single_product->price}}</li>
                                     @else
                                     <div class="pro-price">
                                         <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">UGX {{$single_product->price}}</li>
                                         <li class="list-inline-item">UGX {{$single_product->old_price}}</li>
                                         </ul>    
                                     </div>
                                     @endif
                                     <div class="colo-siz">
                                         <div class="qty-box">
                                             <ul class="list-unstyled list-inline">
                                                 <li class="list-inline-item">Qty :</li>
                                                 <li class="list-inline-item quantity buttons_added">
                                                     <input type="button" value="-" class="minus">
                                                     <input type="number" step="1" min="1" max="10" value="1" class="qty text" size="4" readonly>
                                                     <input type="button" value="+" class="plus">
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="pro-btns">
                                              <a href="" class="cart">Add To Cart</a>
                                              <a href="" class="fav-com" data-toggle="tooltip" data-placement="top" title="Wishlist"><img src="{{asset('images/it-fav.png')}}" alt=""></a>
                                    
                                         </div>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="sg-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pro-det">Product Details</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rev">Reviews (03)</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pro-det" role="tabpanel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur, expedita, autem labore eos, totam rem quo similique est et qui quaerat cumque sed ab quae assumenda. Non, quas, nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, necessitatibus, dicta iusto in, similique quas<br><br> accusamus debitis illum distinctio nemo numquam obcaecati at itaque odio ducimus cupiditate minima labore libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur, expedita, autem labore eos, totam rem quo similique est et qui quaerat cumque sed ab quae assumenda. <br><br>Non, quas, nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, necessitatibus, dicta iusto in, similique quas accusamus debitis illum distinctio nemo numquam obcaecati at itaque odio ducimus cupiditate.</p>
                                        </div>
                                        <div class="tab-pane fade" id="rev" role="tabpanel">
                                            <div class="review-box d-flex">
                                                <div class="rv-img">
                                                    <img src="images/testimonial-1.jpg" alt="">
                                                </div>
                                                <div class="rv-content">
                                                    <h6>Michel Kolins <span>(Feb 10, 2020)</span></h6>
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut eveniet repellendus voluptas.</p>
                                                </div>
                                            </div>
                                            <div class="review-box d-flex">
                                                <div class="rv-img">
                                                    <img src="images/testimonial-2.jpg" alt="">
                                                </div>
                                                <div class="rv-content">
                                                    <h6>Jenus Doe <span>(Feb 10, 2020)</span></h6>
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <p>Consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut eveniet repellendus voluptas.</p>
                                                </div>
                                            </div>
                                            <div class="review-form">
                                                <h6>Add Your Review</h6>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="star-rating">
                                                                <label>Your Rating*</label>
                                                                <span class="fa fa-star-o" data-rating="1"></span>
                                                                <span class="fa fa-star-o" data-rating="2"></span>
                                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="whatever1" class="rating-value" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your Name*</label>
                                                            <input type="text" name="name" required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your Email*</label>
                                                            <input type="text" name="email" required="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Your Review*</label>
                                                            <textarea required=""></textarea>
                                                            <button type="submit">Add Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="sim-pro">
                                    <div class="sec-title">
                                        <h5>Similar Product</h5>
                                    </div>
                                    <div class="sim-slider owl-carousel">
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-5.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="">Item Title Here</a></p>
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
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-11.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="">Item Title Here</a></p>
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
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-7.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="">Item Title Here</a></p>
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
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-9.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="">Item Title Here</a></p>
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
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" src="images/tab-13.png" alt="">
                                                <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                <div class="layer-box">
                                                    <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="images/it-comp.png" alt=""></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="">Item Title Here</a></p>
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
                                                    <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item">$120.00</li>
                                                        <li class="list-inline-item">$150.00</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-box">
                            <div class="sec-title">
                                <h6>Categories</h6>
                            </div>
                            <!-- accordion -->
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse1">
                                            <span>Clothing</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse1" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse2">
                                            <span>Electronics</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse2" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse3">
                                            <span>Home Appliance</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse3" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse4">
                                            <span>Smartphone</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse4" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse5">
                                            <span>Computer</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse5" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse6">
                                            <span>Kids Collection</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse6" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a href="" data-toggle="collapse" data-target="#collapse7">
                                            <span>Automobile</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapse7" class="collapse">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ht-offer">
                            <div class="sec-title">
                                <h6>Hot Offer</h6>
                            </div>
                            <div class="ht-body owl-carousel">
                                <div class="ht-item">
                                    <div class="ht-img">
                                        <a href="#"><img src="images/tab-15.png" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p><a href="">Items Title Name Enter Here</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-item">
                                    <div class="ht-img">
                                        <a href="#"><img src="images/tab-14.png" alt="" class="img-fluid"></a>
                                        <span>- 59%</span>
                                        <ul class="list-unstyled list-inline counter-box">
                                            <li class="list-inline-item">185 <p>Days</p></li>
                                            <li class="list-inline-item">11 <p>Hrs</p></li>
                                            <li class="list-inline-item">39 <p>Mins</p></li>
                                            <li class="list-inline-item">51 <p>Sec</p></li>
                                        </ul>
                                    </div>
                                    <div class="ht-content">
                                        <p><a href="">Items Title Name Enter Here</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-box">
                            <a href=""><img src="images/s-banner1.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Single Product Area -->
  
 
@endsection