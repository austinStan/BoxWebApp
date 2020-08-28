@extends('Pages.index')

@section('title', 'Register')

@section('content')
<!-- Top Bar 2 -->
@include('_partials.scrollable')
<!-- End Top Bar 2 -->
<!-- Logo Area 2 -->
@include('_partials.logo_area')
<!-- End Logo Area 2 -->



@include('_partials.sticky_menu')


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
                        <a href=""><img src="{{asset('images/logo.png')}}" alt=""></a>
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
                        <li class="list-inline-item"><span>||</span>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->
<section class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('register') }} ">
                    @csrf
                    <h5>Create Your Account</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="first_name">First Name*</label>
                            <input id='first_name' type="text" class="@error('first_name') is-invalid @enderror"
                                name="first_name" value="{{old('first_name')}}" placeholder="Your first name">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="last_name">Last Name*</label>
                            <input id='last_name' type="text" class="@error('last_name') is-invalid @enderror"
                                name="last_name" value="{{old('last_name')}}" placeholder="Your Last name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="email">Email Address*</label>
                            <input id='email' class="@error('email') is-invalid @enderror" type="text" name="email"
                                value="{{old('email')}}" placeholder="Your email address">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="phone_number">Phone Number*</label>
                            <input id="phone_number" type="text" class=" @error('phone_number') is-invalid @enderror"
                                value="{{old('phone_number')}}" name="phone_number" placeholder="Your phone number">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="password">Password*</label>
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                                name="password" placeholder="Password should be atleast 8 character" required>
                                <i id="pass-status" class="fa fa-eye fa-1x" style="position:relative; left:95%; bottom:65px;" onClick="viewPassword()" aria-hidden="true"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="password_confirmation">Confirm Password*</label>
                            <input id="password_confirmation" type="password"
                                class=" @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" placeholder="Confirm your password" required>
                                <i id="pass-status-confirm" class="fa fa-eye fa-1x" style="position:relative; left:95%; bottom:65px;" onClick="viewConfirmPassword()" aria-hidden="true"></i>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="col-md-7">
                            <div>
                                <input type="checkbox" name="t-box" id="t-box">
                                <label for="t-box">I have read the terms and condition.</label>
                            </div>
                            <div>
                                <input type="checkbox" name="c-box" id="c-box">
                                <label for="c-box">Subscribe for newsletter</label>
                            </div>
                        </div> --}}
                        <div class="col-md-12 text-center ">
                            <button type="submit" name="button">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Log In -->

<!-- Brand area 2 -->
{{-- <section class="brand2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
    </div>
</section> --}}
<!-- End Brand area 2 -->

<!-- Footer Area -->

<!-- End Category Area -->

{{-- <!-- Brand area 2 -->
        <section class="brand2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="{{asset('images/brand-01.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="bnd-items">
    <a href="#"><img src="{{asset('images/brand-02.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="bnd-items">
    <a href="#"><img src="{{asset('images/brand-03.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="bnd-items">
    <a href="#"><img src="{{asset('images/brand-04.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="bnd-items">
    <a href="#"><img src="{{asset('images/brand-05.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="bnd-items">
    <a href="#"><img src="{{asset('images/brand-06.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="bnd-items">
    <a href="#"><img src="{{asset('images/brand-07.png')}}" alt="" class="img-fluid"></a>
</div>
</div>
</div>
</div>
</div>
</section> --}}
<!-- End Brand area 2 -->

<script>
    function viewPassword(){
     var passwordInput = document.getElementById('password');
     var passStatus = document.getElementById('pass-status');
         if (passwordInput.type == 'password')
         {
             passwordInput.type='text';
             passStatus.className='fa fa-eye-slash';
         }
         else
         {
             passwordInput.type='password';
             passStatus.className='fa fa-eye';
         }
    }
    
     function viewConfirmPassword(){
        var passwordInput = document.getElementById('password_confirmation');
        var passStatus = document.getElementById('pass-status-confirm');
            if (passwordInput.type == 'password')
            {
                passwordInput.type='text';
                passStatus.className='fa fa-eye-slash';
            }
            else
            {
                passwordInput.type='password';
                passStatus.className='fa fa-eye';
            }
       }
        </script>
   
@endsection