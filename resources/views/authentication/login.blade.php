@extends('Pages.index')

@section('title', 'Login')

@section('content')
<!-- Top Bar 2 -->
@include('_partials.scrollable')
<!-- End Top Bar 2 -->
<!-- Logo Area 2 -->
@include('_partials.logo_area')
<!-- End Logo Area 2 -->


<!-- End Cart Body -->

@include('_partials.sticky_menu')

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
                        <li class="list-inline-item"><span>||</span> Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="n-customer">
                    <h5>New Customer</h5>
                    <p>Box Uganda Customer Registration</p>
                    <a href="{{route('register')}}">Create an Account</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="r-customer">
                    <h5>Registered Customer</h5>
                    <p>If you have an account with us, please log in.</p>
                    <form method="POST" action="{{route('login')}}" >
                        @csrf
                        <div class="emal">
                            <label for='email' >Email address</label>
                            <input id ='email' type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="pass">
                            <label for="password">Password</label>
                            <input id="password" class="@error('password') is-invalid @enderror" name="password" type="password" required>
                            <i id="pass-status" class="fa fa-eye fa-1x" style="position:relative; left:95%; bottom:50px;" onClick="viewPassword()" aria-hidden="true"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="d-flex justify-content-between nam-btm">
                            <div>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember Me</label>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                                @endif
                            </div>
                        </div>
                        <button type="submit" name="button">Log In</button>
                    </form>
                </div>
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
    </script>
@endsection