@extends('Pages.index')

@section('title', 'shopping cart')
@section('content')
<!-- Top Bar 2 -->
@include('_partials.scrollable')
<!-- End Top Bar 2 -->
<!-- Logo Area 2 -->
@include('_partials.logo_area')

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
                        <li class="list-inline-item"><span>||</span>shopping cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
     <!-- Shopping Cart -->
     <section class="shopping-cart">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    @include('flash-message')
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="t-pro">Product</th>
                                    <th class="t-price">Price</th>
                                    <th class="t-qty">Quantity</th>
                                    <th class="t-total">Total</th>
                                    <th class="t-rem"></th>
                                </tr>
                            </thead>

                            
                            <tbody>
                                @if(\Cart::session(auth()->id())->getContent()->count() > 0)
                                @foreach($cart_items as $item)
                                <tr>
                                    <td class="t-pro d-flex">
                                        <div class="t-img">
                                        <a href="{{route('products.show',$item->attributes->slug)}}"><img src="{{asset('storage/'.$item->attributes->image)}}" alt=""
                                                style="height:100px;width:100px;" ></a>
                                        </div>
                                        <div class="t-content">
                                        <p class="t-heading"><a href="{{route('products.show',$item->attributes->slug)}}">{{$item->name}}</a></p>
                                            <ul class="list-unstyled list-inline rate">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            {{-- <ul class="list-unstyled col-sz">
                                                <li><p>Color : <span>Red</span></p></li>
                                                <li><p>Size : <span>M</span></p></li>
                                            </ul> --}}
                                        </div>
                                    </td>
                                <td class="t-price">UGX {{$item->price}}</td>
                                  
                                    <td class="t-qty">
                                        <div class="qty-box">
                                         <form action="{{route('cart.update',$item->id)}}">
                                                @csrf
                                            <div class="quantity buttons_added">
                                                
                                                <input type="submit" value="-" class="minus">
                                                
                                              <input type="number" step="1" min="1" name='quantity' value="{{$item->quantity}}" class="qty text" size="4" readonly>
                    
                                                <input type="submit" value="+" class="plus">
                                               
                                            </div>
                                            {{-- <button type='submit' class="btn btn-success" >update quantity</button> --}}
                                        </form>
                                        </div>
                                    </td>
                                    
                               
                                <td class="t-total">UGX {{\Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                                <td class="t-rem"><a href="{{route('cart.destroy',$item->id)}}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                                @else
                                        
                                        <div class="alert alert-warning alert-block">
                                            No Items in The Cart
                                        </div>
                                        <div class='spacer'></div>
                                        <a href={{route('products.index')}} class='btn btn-success btn-outline'>Continue Shopping</a>
                                        <div class='spacer'></div>
                                @endif
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="shipping">
                        <h6>Calculate Shipping and Tax</h6>
                        <p>Enter your destination to get shipping estimate</p>
                        <form action="#">
                            <div class="country-box">
                                <select class="country">
                                    <option>Select Country</option>
                                    <option>United State</option>
                                    <option>United Kingdom</option>
                                    <option>Germany</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                            <div class="state-box">
                                <select class="state">
                                    <option>State/Province</option>
                                    <option>State 1</option>
                                    <option>State 2</option>
                                    <option>State 3</option>
                                    <option>State 4</option>
                                </select>
                            </div>
                            <div class="post-box">
                                <input type="text" name="zip" value="" placeholder="Zip/Postal Code">
                                <button type="button">Get Estimate</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="coupon">
                        <h6>Discount Coupon</h6>
                        <p>Enter your coupon code if you have one</p>
                    <form action="{{route('cart.coupon')}}">
                             @csrf
                            <input type="text" name="coupon_code" value="" placeholder="Your Coupon">
                            <button type="submit" name='apply_coupon'>Apply Code</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="crt-sumry">
                        <h5>Cart Summery</h5>
                        <ul class="list-unstyled">
                            <li>Subtotal <span>UGX {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                            <li>Tax <span>$00.00</span></li>
                            <li>Grand Total <span>UGX {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                        </ul>
                        <div class="cart-btns text-right">
                            <button type="button" class="up-cart">Update Cart</button>
                            <button type="button" class="chq-out">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection