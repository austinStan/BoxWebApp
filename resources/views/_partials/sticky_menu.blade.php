<!-- Sticky Menu -->
<section class="sticky-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="sticky-logo">
                <a href="{{url('/')}}"><img src="{{asset('images/box.png')}}" height='45px' width='150px' alt=""
                            class="img-fluid"></a>
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
                        <a href="" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                            <img src="{{asset('images/cart.png')}}" alt="cart">
                            <span>2</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sticky Menu -->