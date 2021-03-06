<!-- Sticky Menu -->
<section class="sticky-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="sticky-logo">
                    <a href="{{url('/')}}"><img src={{asset("images/logo/set.png")}} alt="" width='100px' height='65px'
                            style="border-radius:5px; margin-top:40px;"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="main-menu">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#">HOME</a></li>
                        <li class="list-inline-item"><a href="#">ABOUT US</a></li>
                        <li class="list-inline-item"><a href="#">FAQS</a></li>
                        <li class="list-inline-item"><a href="#">REVIEWS</a></li>
                        <li class="list-inline-item"><a href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-2">
                <div class="carts-area d-flex">
                    <div class="src-box">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search Here">
                            <button type="button" name="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="wsh-box ml-auto">
                        <a href="" data-toggle="tooltip" data-placement="top" title="Wishlist">
                            <img src="{{asset('images/heart.png')}}" alt="favorite">
                            <span>0</span>
                        </a>
                    </div>
                    <div class="cart-box ml-4">
                        @if(auth::check())
                        <a href="{{route('cart.index')}}" data-toggle="tooltip" data-placement="top"
                            title="Shopping Cart" class="">
                            <img src="{{asset('images/cart.png')}}" alt="cart">
                            <span>{{ \Cart::session(auth()->id())->getContent()->count()}}</span>
                        </a>
                        @else
                        <a href="{{route('login')}}" data-toggle="tooltip" data-placement="top" title="Shopping Cart"
                            class="">
                            <img src="{{asset('images/cart.png')}}" alt="cart">
                            <span>0</span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sticky Menu -->