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
                        <a href=""><img src="images/box.png" alt="" height='65px' width='160px'></a>
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
                                <img src="images/call.png" alt="">
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
                        <p><i class="fa fa-bars"></i>All Categories</p>
                        <ul class="list-unstyled">
                            <li><a href=""><span class="fa fa-list pr-3"></span>Land<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6> ACRES</h6>
                                                <a href="{{route('masaka')}}">- Masaka</a>
                                                <a href="">- Mukono</a>
                                                <a href="">- Mpigi</a>
                                                <a href="">- Gulu</a>
                                                <a href="">- Abim</a>
                                            </div>
                                            <div class="smartphone">
                                                <h6>PLOTS</h6>
                                                <a href="">- Masaka</a>
                                                <a href="">- Mukono</a>
                                                <a href="">- Mpigi</a>
                                                <a href="">- Gulu</a>
                                                <a href="">- Mpigi</a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet pt-4">
                                                <a href="">- Lyantodde</a>
                                                <a href="">- FortPortal</a>
                                                <a href="">- Manafa</a>
                                                <a href="">- Luweero</a>
                                                <a href="">- Jinja</a>
                                            </div>
                                            <div class="f-phone">
                                                <a href="">- Mbarara</a>
                                                <a href="">- FortPortal</a>
                                                <a href="">- Manafa</a>
                                                <a href="">- Luweero</a>
                                                <a href="">- Jinja</a>
                                                <a href="">- Mukono</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            <div class="accesories">
                                                <a href="">- Masaka</a>
                                                <a href="">- Mukono</a>
                                                <a href="">- Mpigi</a>
                                                <a href="">- Gulu</a>
                                                <a href="">- Abim</a>
                                            </div>
                                            <div class="tablet pt-4">
                                                <a href="">- Lyantodde</a>
                                                <a href="">- FortPortal</a>
                                                <a href="">- Manafa</a>
                                                <a href="">- Luweero</a>
                                                <a href="">- Jinja</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class='fa fa-home pr-3'></span>Houses<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>On Sale</h6>
                                                <a href="{{route('wakiso')}}">- 3 bedrooms,Wakiso </a>
                                                <a href="">- 4 bedrooms,Mpigi</a>
                                                <a href="">- 5 bedrooms,Entebbe</a>
                                                <a href="">- 2 bedrooms,Gulu</a>
                                                <a href="">- 1 bedrooms,Kampala</a>
                                                <a href="">- 3 bedrooms,Wakiso </a>
                                                <a href="">- 4 bedrooms,Mpigi</a>
                                                <a href="">- 5 bedrooms,Entebbe</a>
                                                <a href="">- 2 bedrooms,Gulu</a>
                                                <a href="">- 1 bedrooms,Kampala</a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet pt-4">
                                                <a href="">- 4 bedrooms,Mpigi</a>
                                                <a href="">- 5 bedrooms,Entebbe</a>
                                                <a href="">- 2 bedrooms,Gulu</a>
                                                <a href="">- 1 bedrooms,Kampala</a>
                                                <a href="">- 3 bedrooms,Wakiso </a>
                                                <a href="">- 4 bedrooms,Mpigi</a>
                                                <a href="">- 5 bedrooms,Entebbe</a>
                                                <a href="">- 2 bedrooms,Gulu</a>
                                                <a href="">- 1 bedrooms,Kampala</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            <div class="accesories">
                                                <a href="">- 1 bedrooms,Kampala</a>
                                                <a href="">- 3 bedrooms,Wakiso </a>
                                                <a href="">- 4 bedrooms,Mpigi</a>
                                                <a href="">- 5 bedrooms,Entebbe</a>
                                                <a href="">- 2 bedrooms,Gulu</a>
                                                <a href="">- 1 bedrooms,Kampala</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-cloud pr-3"></span>Building Materials<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>SAND</h6>
                                                <a href="{{route('lakesand')}}">- Lake Sand</a>
                                                <a href="{{route('riversand')}}">- River Sand </a>
                                            </div>
                                            <div class="smartphone">
                                                <h6>BRICKS</h6>
                                                <a href="{{route('firebricks')}}">- Fire Bricks</a>
                                                <a href="{{route('halfbricks')}}">- Half Bricks </a>
                                                <a href="{{route('concretebricks')}}">- Concrete Bricks </a>
                                            </div>
                                            <div class="smartphone">
                                                <h6>FLOOR&TILES</h6>
                                                <a href="{{route('stair-edging')}}">- Stair-Edging</a>
                                                <a href="{{route('carpet-trim')}}">- Carpet Trims</a>
                                                <a href="{{route('floor-runner')}}">- Floor runners </a>
                                                <a href="">- Tile Edging </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>CEMENT</h6>
                                                <a href="{{route('hima-cement')}}">- Hima</a>
                                                <a href="">- Tororo</a>
                                                <a href="">- Kampala</a>
                                            </div>
                                            <div class="tablet">
                                                <h6>ROOFING</h6>
                                                <a href="{{route('roofing-tools')}}">- Roofing Tools</a>
                                                <a href="{{route('iron-sheets')}}">- Iron Sheets</a>
                                                <a href="">- Wood Fasteners</a>
                                            </div>
                                            <div class="tablet">
                                                <h6>DOORS & WINDOWS</h6>
                                                <a href="{{route('interior-doors')}}">- Interior Doors</a>
                                                <a href="">- Panic and Exit Door</a>
                                                <a href="">- Glass Sheets</a>
                                                <a href="">- Folding Doors & Hardware</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="f-phone">
                                                <h6>GUTTERS</h6>
                                                <a href=" {{route('guttering-tools')}}">- Guttering Tools</a>
                                                <a href="">- Splash Blocks</a>
                                                <a href="">- Gutter Guards</a>
                                            </div>
                                            <div class="accesories">
                                                <h6>PAINT</h6>
                                                <a href="">- Spray Paints</a>
                                                <a href="">- Sand Paper & Abrasives</a>
                                                <a href="">- Brushes</a>
                                                <a href="">- Ladders & Scaffolding</a>
                                            </div>
                                            <div class="accesories">
                                                <h6>DOMESTIC HARDWARE</h6>
                                                <a href="">- Locks & Accessories</a>
                                                <a href="">- Fasteners</a>
                                                <a href="">- Hinges</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-wrench pr-3"></span>Plumbing Tools<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>PIPES</h6>
                                                <a href="{{route('pipes-fitting')}}">- Pipes & Tubings</a>
                                                <a href="">- Pipe Fittings </a>
                                                <a href="">- Pumps & Accessories</a>
                                                <a href="">- Supply Lines & Connectors</a>

                                            </div>
                                            <div class="smartphone">

                                                <h6>METALS</h6>
                                                <a href="{{route('iron-bars')}}">-Iron Bars</a>
                                                <a href="">-Square Steel</a>
                                                <a href="">-Hollow Section </a>
                                                <a href="">-Millwork </a>
                                                <a href="">-Mild Steel Plates </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>LAUNDARY & BATHROOMS</h6>
                                                <a href="{{route('bathrooms')}}">- Bathrooms</a>
                                                <a href="">- Valves & Parts</a>
                                                <a href="">- Shower Parts</a>
                                                <a href="">- Shower Doors</a>
                                                <a href="">- Laundry Tubs </a>
                                            </div>
                                            <div class="smartphone">
                                                <h6>MACHINES</h6>
                                                <a href="{{route('washing-machines')}}">- Washing Machines</a>
                                                <a href="">- Water Heaters</a>
                                                <a href="">- Water Filters </a>
                                                <a href="">- Garbage Disposals</a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="f-phone">
                                                <h6>TOILETS</h6>
                                                <a href="{{route('toilets')}}">- Toilet & Urinals</a>
                                                <a href="">- Toilet & Seats</a>
                                                <a href="">- Toilet &Parts</a>
                                                <a href="">- Sceptic Tanks</a>
                                                <a href="">- Drain Fittings</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-cogs pr-3"></span>Electricals and Wiring<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>LIGHTINGS</h6>
                                                <a href="{{route('garden-lightings')}}">- Garden Lightings</a>
                                                <a href="">- Interior Light Fixtures</a>
                                                <a href="">- Outdoor Lightings Fixtures</a>
                                                <a href="">- Energy Saver Lights</a>
                                                <a href="">- Switches</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>WIRES & CABLES</h6>
                                                <a href="{{route('cables')}}">- Flexible Flat Cables</a>
                                                <a href="">- PVC wires</a>
                                                <a href="">- Single Core Flexible Cables</a>
                                                <a href="">- Multi-core Flexible Cable</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-tags pr-3"></span>Livestock<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>COWS</h6>
                                                <a href="{{route('ankole-longhorned')}}">- Ankole Long-Horns</a>
                                                <a href="">- Fresians</a>
                                                <a href="">- Kigezi Cattle</a>
                                            </div>
                                            <div class="smartphone">
                                                <h6>GOATS</h6>
                                                <a href="{{route('alphine-goats')}}">-Alphine Goats </a>
                                                <a href="">- Mubende Goats</a>
                                                <a href="">- Kigezi Goats</a>
                                                <a href="">- Sebei Goats</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>PIGS</h6>
                                                <a href="{{route('weaners')}}">- Weaners</a>
                                                <a href="">- Growers</a>
                                                <a href="">- Fatteners</a>
                                                <a href="">- Sows</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="accesories">
                                                <h6>POULTRY</h6>
                                                <a href="{{route('chicken')}}">- Chicken</a>
                                                <a href="">- Turkeys</a>
                                                <a href="">- Ducks</a>
                                                <a href="">- Pigeons</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-building-o pr-3"></span>Apartments<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>SERVICE APARTMENTS</h6>
                                                <a href="{{route('service-apartments')}}">- Dina Apartments</a>
                                                <a href="">- kampala Boulverd suites</a>
                                                <a href="">- Natra Apartments</a>
                                                <a href="">- Selina Apartments </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>HOTELS</h6>
                                                <a href="{{route('hotels')}}">- Serena Hotel</a>
                                                <a href="">- Speke Resort</a>
                                                <a href="">- Hotel Africana</a>
                                                <a href="">- North Dakota Suites</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-car pr-3"></span>Vehicles<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>LUXURY</h6>
                                                <a href="{{route('luxury')}}">- Toyoto Harrier</a>
                                                <a href="">- Ipsums</a>
                                                <a href="">- Poshe</a>
                                                <a href="">- BMW</a>
                                                <a href="">- BMW</a>
                                                <a href="">- BMW</a>
                                                <a href="">- BMW</a>
                                                <a href="">- BMW</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>COMMERCIALS</h6>
                                                <a href="{{route('commercial')}}">- PickUps</a>
                                                <a href="">- Buses</a>
                                                <a href="">- Taxi</a>
                                                <a href="">- Lorries</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-apple pr-3"></span>Groceries<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>FRUITS</h6>
                                                <a href="{{route('mangoes')}}">- Mangoes</a>
                                                <a href="">- Apples</a>
                                                <a href="">- Avacoda</a>
                                                <a href="">- pears</a>
                                                <a href="">- Watermelon</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>VEGETABLES</h6>
                                                <a href="{{route('carrots')}}">- Carrots</a>
                                                <a href="">- Greens</a>
                                                <a href="">- cabbages</a>
                                            </div>
                                            <div class="f-phone">
                                                <h6>DAIRY</h6>
                                                <a href="{{route('milk')}}">- Milk</a>
                                                <a href="">- Cheese</a>
                                                <a href="">- Butter</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="f-phone">
                                                <h6>PROCESSED</h6>
                                                <a href="{{route('sugar')}}">- Sugar</a>
                                                <a href="">- Salt</a>
                                                <a href="">- Soap</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li><a href=""><img src="images/w-cloth.png" alt="">Clothings<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>Men's Clothing</h6>
                                                <a href="{{route('shirts')}}">- Shirts</a>
                                                <a href="">- Suits</a>
                                                <a href="">- Shorts</a>
                                                <a href="">- Trousers</a>
                                                <a href="">- Boxers</a>
                                                <a href="">- Trousers</a>
                                                <a href="">- Boxers</a>
                                                <a href="">- Trousers</a>
                                                <a href="">- Boxers</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>Women's Clothing</h6>
                                                <a href="{{route('shoes')}}">- Shoes</a>
                                                <a href="">- Leggings</a>
                                                <a href="">- Jackets</a>
                                                <a href="">- Pants</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="accesories">
                                                <h6>BABY CLOTHINGS</h6>
                                                <a href="{{route('outfit')}}">- Outfits </a>
                                                <a href="">- Beddings</a>
                                                <a href="">- Pants</a>
                                                <a href="">- Shorts</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><span class="fa fa-users pr-3"></span>Services<i
                                        class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>PLUMBING</h6>
                                                <a href="">- Plenco Plumbing Companies</a>
                                                <a href="">- NK plumbers</a>
                                                <a href="">- Master Plumbers</a>
                                            </div>
                                            <div class="f-phone">
                                                <h6>CLEANERS</h6>
                                                <a href="">- 7 star cleaning services </a>
                                                <a href="">- Jow cleaning services</a>
                                                <a href="">- Fresh Look Limited</a>
                                            </div>
                                            <div class="f-phone">
                                                <h6>PAINTERS</h6>
                                                <a href="">- 7 star cleaning services </a>
                                                <a href="">- Jow cleaning services</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>ELECTRICIANS</h6>
                                                <a href="">- Omega Electricians</a>
                                                <a href="">- Sure Power</a>
                                                <a href="">- China International Water</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="accesories">
                                                <h6>CONSTRUCTION</h6>
                                                <a href="">- Mutoni Construction Ltd</a>
                                                <a href="">- Ultracon Overseas</a>
                                                <a href="">- Pearl Engineering Ltd</a>
                                                <a href="">- Prism Construction</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
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
                                    <div class="bt-items">
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100f.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">fire bricks</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 20,000</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100w.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">Aluminium Window</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 290,000</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100c.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">Fresian Cow</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 1.8M</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100h.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">3 bedrooms,Mpigi</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 50M</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bt-items">
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100h.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">3 bedrooms,Mpigi</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 50M</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100c.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">Fresian Cow</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 1.8M</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100w.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">Aluminium Window</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 290,000</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bt-box d-flex">
                                            <div class="bt-img">
                                                <a href="#"><img src="{{asset('images/bestdeals/100f.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="bt-content">
                                                <p><a href="">fire bricks</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 20,000</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="rt-items">
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">100 acres Mpigi </a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 160M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated2.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">coated Ironsheets</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 400,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated3.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">Alphine Breed,Goats</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 90,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated4.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">Toyota 2018</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 20M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rt-items">
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">100 acres Mpigi </a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 160M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated2.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">coated Ironsheets</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 400,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated4.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">Toyota 2018</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 20M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rt-box d-flex">
                                            <div class="rt-img">
                                                <a href="#"><img src="{{asset('images/toprated/toprated3.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rt-content">
                                                <p><a href="">Alphine Breed,Goats</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 90,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                        <h5>Feature Product</h5>
                                    </div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#all">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#elec">Land</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#smart">Houses</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#shoe">Building Materials</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Land</a></li>
                                                        {{-- <li class="list-inline-item"><a href="#"></a></li> --}}
                                                    </ul>
                                                    <p><a href="">30 acres in Kajjansi,Mukono</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('images/Land/land-p.png')}}" alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{asset('images/Land/land-p.png')}}" alt="">
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
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item">UGX 4M</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">House</a></li>
                                                        {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                                    </ul>
                                                    <p><a href="">4 bedrooms,Entebbe</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('images/Houses/beach.png')}}" alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{asset('images/Houses/beach.png')}}" alt="">
                                                    <span class="sale">Sale</span>
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
                                                            <li class="list-inline-item">UGX 200M</li>
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
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Plumbing Tools</a></li>
                                                        {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                                    </ul>
                                                    <p><a href="">12m water pipe</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('images/PlumbingTools/Pipes/pipes.png')}}" alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{asset('images/PlumbingTools/Pipes/pipes.png')}}" alt="">
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
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item">UGX 400,000</li>
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
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Roofing Tools</a></li>
                                                        {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                                    </ul>
                                                    <p><a href="">Electric Hand Tool</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('images/BuildingMaterials/Roofing/RoofingTools/handtool.png')}}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{asset('images/BuildingMaterials/Roofing/RoofingTools/handtool.png')}}"
                                                        alt="">
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
                                                            <li class="list-inline-item">UGX 450,000</li>
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="elec" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('images/BuildingMaterials/Roofing/RoofingTools/handtool.png')}}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{asset('images/BuildingMaterials/Roofing/RoofingTools/handtool.png')}}"
                                                        alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-6.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                    <span class="new">New</span>
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-7.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-8.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smart" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-9.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-10.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                    <span class="sale">Sale</span>
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-11.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-12.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shoe" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-13.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-14.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
                                                    <span class="new">New</span>
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-15.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-heading">
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                    </ul>
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="images/tab-9.png" alt="">
                                                    <img class="sec-img img-fluid" src="images/tab-16.png" alt="">
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
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Cart"><img src="images/it-cart.png"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <h5>New Product</h5>
                                </div>
                                <div class="new-slider owl-carousel">
                                    <div class="new-item">
                                        <div class="tab-heading">
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><a href="#">Roofing Tools</a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                            </ul>
                                            <p><a href="">Electric Hand Tool</a></p>
                                        </div>
                                        <div class="new-img">
                                            <img class="main-img img-fluid"
                                                src="{{asset('images/newproducts/handtool.png')}}" alt="">
                                            <img class="sec-img img-fluid"
                                                src="{{asset('images/newproducts/handtool.png')}}" alt="">
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
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 90,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-item">
                                        <div class="tab-heading">
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><a href="#">vehicles</a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                            </ul>
                                            <p><a href="">Toyota </a></p>
                                        </div>
                                        <div class="new-img">
                                            <img class="main-img img-fluid"
                                                src="{{asset('images/newproducts/toyota.png')}}" alt="">
                                            <img class="sec-img img-fluid"
                                                src="{{asset('images/newproducts/toyota.png')}}" alt="">
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
                                                    <li class="list-inline-item">UGX 50M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-item">
                                        <div class="tab-heading">
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><a href="#">Apartments</a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                            </ul>
                                            <p><a href="">4 bedrooms,nsangi</a></p>
                                        </div>
                                        <div class="new-img">
                                            <img class="main-img img-fluid"
                                                src="{{asset('images/newproducts/white.png')}}" alt="">
                                            <img class="sec-img img-fluid"
                                                src="{{asset('images/newproducts/white.png')}}" alt="">
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
                                                    <li class="list-inline-item">UGX 60M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-item">
                                        <div class="tab-heading">
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><a href="#">Cement</a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Smart Led</a></li> --}}
                                            </ul>
                                            <p><a href="">Hima Cement</a></p>
                                        </div>
                                        <div class="new-img">
                                            <img class="main-img img-fluid"
                                                src="{{asset('images/newproducts/cement.png')}}" alt="">
                                            <img class="sec-img img-fluid"
                                                src="{{asset('images/newproducts/cement.png')}}" alt="">
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
                                                    <li class="list-inline-item">UGX 35,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="slr-items">
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/100c.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Fresian Breed</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 2M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/toprated3.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Alphine Goat Breed</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 90,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/topseller.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Landrace pig breeds</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 200,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slr-items">
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/safari.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Family Safari Vehicle</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 50M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/interior.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Interior Furniture Door</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 120,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/100w.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Aluminium Window</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 200,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slr-items">
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/100h.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">3 bedrooms, mukono town</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 60M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/topseller2.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">4 bedrooms Kanjokya Street</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 80M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/topseller3.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">4 bedrooms Nansana,Wakiso</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline ">
                                                    <li class="list-inline-item">UGX 50M</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slr-items">
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/topseller4.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Ceramic Tiles</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 30,000 each set</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/100f.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Fire Bricks</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 20000 each set</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slr-box d-flex">
                                            <div class="slr-img">
                                                <a href="#"><img src="{{asset('images/topseller/topseller4.png')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="slr-content">
                                                <p><a href="">Raked Gutters</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">UGX 180,000</li>
                                                    {{-- <li class="list-inline-item">$150.00</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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