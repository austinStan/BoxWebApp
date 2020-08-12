@extends('Pages.index')

@section('title', $categoryName)

@section('content')
<!-- Top Bar 2 -->
@include('_partials.scrollable')
<!-- End Top Bar 2 -->
<!-- Logo Area 2 -->
<section class="logo-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('images/box.png')}}" height='60px' width='150px'
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 padding-fix">
                <form action="#" class="search-bar d-flex">
                    <input type="text" name="search-bar" placeholder="I'm looking for...">
                    <div class="search-cat">
                        <select class="form-control scat-id">
                            <option>All Categories</option>
                            <option>Land</option>
                            <option>Houses</option>
                            <option>Building Materials</option>
                            <option>Plumbing Tools</option>
                            <option>Electrical&Wiring</option>
                            <option>Livestock</option>
                            <option>Apartments</option>
                            <option>Vehicles</option>
                            <option>Groceries</option>
                            <option>Services</option>
                        </select>
                    </div>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-lg-3 col-md-2">
                <div class="carts-area d-flex">
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
<!-- End Logo Area 2 -->

<!-- Cart Body -->
<div class="cart-body">
    <div class="close-btn">
        <button class="close-cart"><img src="{{asset('images/close.png')}}" alt="">Close</button>
    </div>
    <div class="crt-bd-box">
        <div class="cart-heading text-center">
            <h5>Shopping Cart</h5>
        </div>
        <div class="cart-content">
            <div class="content-item d-flex justify-content-between">
                <div class="cart-img">
                    <a href=""><img src="{{asset('images/cart1.png')}}" alt=""></a>
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
                    <a href=""><img src="{{asset('images/cart2.png')}}" alt=""></a>
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
<!-- Menu Area 2 -->
<section class="menu-area2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="sidemenu">
                    <p>All Categories <i class="fa fa-bars"></i></p>
                    <ul class="list-unstyled gt-menu">
                        <li><a href=""><span class="fa fa-list pr-3"></span>Land<i class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6> ACRES</h6>
                                            <a href="#">- Masaka</a>
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
                        <li><a href=""><span class='fa fa-home pr-3'></span>Houses<i class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6>On Sale</h6>
                                            <a href="">- 3 bedrooms,Wakiso </a>
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
                                            <a href="">- Lake Sand</a>
                                            <a href="">- River Sand </a>
                                        </div>
                                        <div class="smartphone">
                                            <h6>BRICKS</h6>
                                            <a href="">- Fire Bricks</a>
                                            <a href="">- Half Bricks </a>
                                            <a href="">- Concrete Bricks </a>
                                        </div>
                                        <div class="smartphone">
                                            <h6>FLOOR&TILES</h6>
                                            <a href="">- Stair-Edging</a>
                                            <a href="">- Carpet Trims</a>
                                            <a href="">- Floor runners </a>
                                            <a href="">- Tile Edging </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>CEMENT</h6>
                                            <a href="">- Tororo</a>
                                            <a href="">- Hima</a>
                                            <a href="">- Kampala</a>
                                        </div>
                                        <div class="tablet">
                                            <h6>ROOFING</h6>
                                            <a href="">- Roofing Tools</a>
                                            <a href="">- Iron Sheets</a>
                                            <a href="">- Wood Fasteners</a>
                                        </div>
                                        <div class="tablet">
                                            <h6>DOORS & WINDOWS</h6>
                                            <a href="">- Interior Doors</a>
                                            <a href="">- Panic and Exit Door</a>
                                            <a href="">- Glass Sheets</a>
                                            <a href="">- Folding Doors & Hardware</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="f-phone">
                                            <h6>GUTTERS</h6>
                                            <a href="">- Guttering Tools</a>
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
                                            <a href="">- Pipes & Tubings</a>
                                            <a href="">- Pipe Fittings </a>
                                            <a href="">- Pumps & Accessories</a>
                                            <a href="">- Supply Lines & Connectors</a>

                                        </div>
                                        <div class="smartphone">

                                            <h6>METALS</h6>
                                            <a href="">-Iron Bars</a>
                                            <a href="">-Square Steel</a>
                                            <a href="">-Hollow Section </a>
                                            <a href="">-Millwork </a>
                                            <a href="">-Mild Steel Plates </a>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>LAUNDARY & BATHROOMS</h6>
                                            <a href="">- Bathroom &Accessories</a>
                                            <a href="">- Valves & Parts</a>
                                            <a href="">- Shower Parts</a>
                                            <a href="">- Shower Doors</a>
                                            <a href="">- Laundry Tubs </a>
                                        </div>
                                        <div class="smartphone">
                                            <h6>MACHINES</h6>
                                            <a href="">- Washing Machines</a>
                                            <a href="">- Water Heaters</a>
                                            <a href="">- Water Filters </a>
                                            <a href="">- Garbage Disposals</a>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="f-phone">
                                            <h6>TOILETS</h6>
                                            <a href="">- Toilet & Urinals</a>
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
                                            <a href="">- Garden Lightings</a>
                                            <a href="">- Interior Light Fixtures</a>
                                            <a href="">- Outdoor Lightings Fixtures</a>
                                            <a href="">- Energy Saver Lights</a>
                                            <a href="">- Switches</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>WIRES & CABLES</h6>
                                            <a href="">- PVC wires</a>
                                            <a href="">- Flexible Flat Cables</a>
                                            <a href="">- Single Core Flexible Cables</a>
                                            <a href="">- Multi-core Flexible Cable</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>MORE</h6>
                                            <a href="">- Rubber Cables</a>
                                            <a href="">- Cable Accessories</a>
                                            <a href="">- Cables & Adapters</a>
                                            <a href="">- Back / Flip Cover</a>
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
                                            <a href="">- Ankole Long-Horns</a>
                                            <a href="">- Fresians</a>
                                            <a href="">- Kigezi Cattle</a>
                                        </div>
                                        <div class="smartphone">
                                            <h6>GOATS</h6>
                                            <a href="">- Kigezi Goats</a>
                                            <a href="">- Mubende Goats</a>
                                            <a href="">- Alphine Goats</a>
                                            <a href="">- Sebei Goats</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>PIGS</h6>
                                            <a href="">- Weaners</a>
                                            <a href="">- Growers</a>
                                            <a href="">- Fatteners</a>
                                            <a href="">- Sows</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>POULTRY</h6>
                                            <a href="">- Chicken</a>
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
                                            <a href="">- Dina Apartments</a>
                                            <a href="">- kampala Boulverd suites</a>
                                            <a href="">- Natra Apartments</a>
                                            <a href="">- Selina Apartments </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>HOTELS</h6>
                                            <a href="">- Serena Hotel</a>
                                            <a href="">- Speke Resort</a>
                                            <a href="">- Hotel Africana</a>
                                            <a href="">- North Dakota Suites</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><span class="fa fa-car pr-3"></span>Vehicles<i class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6>LUXURY</h6>
                                            <a href="">- Ipsums</a>
                                            <a href="">- Kawundo</a>
                                            <a href="">- Poshe</a>
                                            <a href="">- BMW</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>COMMERCIALS</h6>
                                            <a href="">- PickUps</a>
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
                                            <a href="">- Mangoes</a>
                                            <a href="">- Apples</a>
                                            <a href="">- Avacoda</a>
                                            <a href="">- pears</a>
                                            <a href="">- Watermelon</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>VEGETABLES</h6>
                                            <a href="">- Carrots</a>
                                            <a href="">- Greens</a>
                                            <a href="">- cabbages</a>
                                        </div>
                                        <div class="f-phone">
                                            <h6>DAIRY</h6>
                                            <a href="">- Milk</a>
                                            <a href="">- Cheese</a>
                                            <a href="">- Butter</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>GROUND</h6>
                                            <a href="">- Ginger</a>
                                            <a href="">- Matooke</a>
                                            <a href="">- potatoes</a>
                                            <a href="">- yams</a>
                                        </div>
                                        <div class="f-phone">
                                            <h6>PROCESSED</h6>
                                            <a href="">- Sugar</a>
                                            <a href="">- Salt</a>
                                            <a href="">- Soap</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li><a href=""><img src="{{asset('images/w-cloth.png')}}" alt="">Clothings<i
                                    class="fa fa-angle-right"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <h6>Men's Clothing</h6>
                                            <a href="">- Suits</a>
                                            <a href="">- Shirts</a>
                                            <a href="">- Shorts</a>
                                            <a href="">- Trousers</a>
                                            <a href="">- Boxers</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tablet">
                                            <h6>Women's Clothing</h6>
                                            <a href="">- Leggings</a>
                                            <a href="">- Jackets</a>
                                            <a href="">- Shoes</a>
                                            <a href="">- Pants</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="accesories">
                                            <h6>BABY CLOTHINGS</h6>
                                            <a href="">- Shirts</a>
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
            <div class="col-lg-9 col-md-12">
                <div class="main-menu">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#">HOME</a></li>
                        <li class="list-inline-item"><a href="#">ABOUT US</a></li>
                        <li class="list-inline-item"><a href="#">FAQS</a></li>
                        <li class="list-inline-item"><a href="#">REVIEWS</a></li>
                        <li class="list-inline-item"><a href="#">CONTACT</a></li>
                        <li class="list-inline-item cup-btn"><a href="">Get Your Coupon</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <li class="list-inline-item"><span>||</span><a href="">{{$categoryName}}</a></li>
                        {{-- <li class="list-inline-item"><span>||</span>Masaka</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- Category Area -->
<section class="category">
    <div class="container">
        <div class="row">
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
                                    <span>Land</span>
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
                                    <span>Houses</span>
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
                                    <span>Building Materials</span>
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
                                    <span>Plumbing Tools</span>
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
                                    <span>Electricals & Wiring</span>
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
                                    <span>Livestock</span>
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
                                    <span>Apartments</span>
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
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse7">
                                    <span>Vehicles</span>
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
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse7">
                                    <span>Groceries</span>
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
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse7">
                                    <span>Clothings</span>
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
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse7">
                                    <span>Services</span>
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
                {{-- <div class="cat-brand">
                            <div class="sec-title">
                                <h6>Brands</h6>
                            </div>
                            <div class="brand-box">
                                <ul class="list-unstyled">
                                    <li><input type="checkbox" id="samsung" name="name"><label for="samsung">Samsung</label></li>
                                    <li><input type="checkbox" id="apple" name="name"><label for="apple">Apple</label></li>
                                    <li><input type="checkbox" id="sony" name="name"><label for="sony">Sony</label></li>
                                    <li><input type="checkbox" id="onep" name="name"><label for="onep">One Plus</label></li>
                                    <li><input type="checkbox" id="hua" name="name"><label for="hua">Huawei</label></li>
                                    <li><input type="checkbox" id="whi" name="name"><label for="whi">Whirlpool</label></li>
                                </ul>
                            </div>
                        </div> --}}
                <div class="price-range">
                    <div class="sec-title">
                        <h6>Price</h6>
                    </div>
                    <div class="price-filter">
                        <div id="slider-range"></div>
                        <input type="text" id="amount" readonly>
                        <button type="button" name="button">Filter</button>
                    </div>
                </div>
                {{-- <div class="color">
                            <div class="sec-title">
                                <h6>Color</h6>
                            </div>
                            <ul class="list-unstyled color-box">
                                <li><input type="checkbox" id="red" name="name"><label for="red"><span style="background: red;"></span>Red</label></li>
                                <li><input type="checkbox" id="green" name="name"><label for="green"><span style="background: green;"></span>Green</label></li>
                                <li><input type="checkbox" id="blue" name="name"><label for="blue"><span style="background: blue;"></span>Blue</label></li>
                                <li><input type="checkbox" id="gold" name="name"><label for="gold"><span style="background: gold;"></span>Golden</label></li>
                                <li><input type="checkbox" id="brown" name="name"><label for="brown"><span style="background: brown;"></span>Brown</label></li>
                                <li><input type="checkbox" id="black" name="name"><label for="black"><span style="background: black;"></span>Black</label></li>
                            </ul>
                        </div> --}}
                {{-- <div class="pro-tag">
                            <div class="sec-title">
                                <h6>Product Tag</h6>
                            </div>
                            <div class="tag-box">
                                <a href="">Shirt</a>
                                <a href="">Smartphone</a>
                                <a href="">Camera</a>
                                <a href="">Pant</a>
                                <a href="">Glass</a>
                                <a href="">Smart Led Tv</a>
                                <a href="">Watch</a>
                                <a href="">Micro Oven</a>
                                <a href="">Toy</a>
                            </div>
                        </div> --}}
                <div class="add-box">
                    <a href=""><img src="{{asset('images/s-banner2.jpg')}}" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-box">
                    <div class="cat-box d-flex justify-content-between">
                        <!-- Nav tabs -->
                        <div class="view">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#grid"><i
                                            class="fa fa-th-large"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sortby">
                            <span>Sort By</span>
                            <select class="sort-box">
                                <option>Position</option>
                                <option>Name</option>
                                <option>Price</option>
                                <option>Rating</option>
                            </select>
                        </div>
                        <div class="show-item">
                            <span>Show</span>
                            <select class="show-box">
                                <option>12</option>
                                <option>24</option>
                                <option>36</option>
                            </select>
                        </div>
                        <div class="page">
                            <p>Page 1 of 20</p>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">2sq miles Senyi,Buikwe District</a></p>
                                        </div>
                                        <div class="img-content d-flex justify-content-between">
                                            <div>
                                                <ul class="list-unstyled list-inli
                                                ne fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline price">
                                                    <li class="list-inline-item">7M</li>
                                                    <li class="list-inline-item">12M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <span class="sale">Sale</span>
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">30acres Mabira,Kinoni Village</a></p>
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
                                                    <li class="list-inline-item">20M negotiable</li>
                                                    <li class="list-inline-item">25M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">170 acres at kasanda bukuya</a></p>
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
                                                    <li class="list-inline-item">3M</li>
                                                    <li class="list-inline-item">3.5M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">11 acres Ngombele,Nsangi village along lakeshores</a></p>
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
                                                    <li class="list-inline-item">30M</li>
                                                    <li class="list-inline-item">40M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">20 acres Nakisungu,Luseera village</a></p>
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
                                                    <li class="list-inline-item">40M</li>
                                                    <li class="list-inline-item">45M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <span class="new">New</span>
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">7 acres Lusera,along Katoosi road</a></p>
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
                                                    <li class="list-inline-item">40M</li>
                                                    <li class="list-inline-item">50M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">50 acres at nagojje branchoff at namataba jinja road</a></p>
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
                                                    <li class="list-inline-item">15M</li>
                                                    <li class="list-inline-item">20M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <span class="sale">Sale</span>
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">318 acres Katoosi kijiko on block 447,plot 66&67 </a></p>
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
                                                    <li class="list-inline-item">50M-60M</li>
                                                    <li class="list-inline-item">$150.00</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <img class="main-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <img class="sec-img img-fluid" src="{{asset('images/Land/land.png')}}"
                                                alt="">
                                            <div class="layer-box">
                                                <a href="" class="it-comp" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"><img src="{{asset('images/it-comp.png')}}"
                                                        alt=""></a>
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                            <p><a href="">200 acres Mityana-Title in 2-3 months</a></p>
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
                                                    <li class="list-inline-item">100M</li>
                                                    <li class="list-inline-item">150M</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="tab-item2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('images/Land/land.png')}}" alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{asset('images/Land/land.png')}}" alt="">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="item-heading d-flex justify-content-between">
                                                    <div class="item-top">
                                                        <ul class="list-unstyled list-inline cate">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-price">
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                                                        atque dolores aliquid culpa maiores beatae est quod officia
                                                        veniam fugit? Molestiae, illum voluptatibus nisi error
                                                        recusandae cum expedita. Laborum, expedita!</p>
                                                    <a href="" class="it-cart"><span class="it-img"><img
                                                                src="{{asset('images/it-cart.png')}}"
                                                                alt=""></span><span class="it-title">Add To
                                                            Cart</span></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                            alt=""></a>
                                                    <a href="" class="it-comp" data-toggle="tooltip"
                                                        data-placement="top" title="Compare"><img
                                                            src="{{asset('images/it-comp.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="tab-item2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="{{asset('images/tab-2.png')}}"
                                                        alt="">
                                                    <img class="sec-img img-fluid" src="{{asset('images/tab-16.png')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="item-heading d-flex justify-content-between">
                                                    <div class="item-top">
                                                        <ul class="list-unstyled list-inline cate">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-price">
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                                                        atque dolores aliquid culpa maiores beatae est quod officia
                                                        veniam fugit? Molestiae, illum voluptatibus nisi error
                                                        recusandae cum expedita. Laborum, expedita!</p>
                                                    <a href="" class="it-cart"><span class="it-img"><img
                                                                src="images/it-cart.png" alt=""></span><span
                                                            class="it-title">Add To Cart</span></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                            alt=""></a>
                                                    <a href="" class="it-comp" data-toggle="tooltip"
                                                        data-placement="top" title="Compare"><img
                                                            src="{{asset('images/it-comp.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="tab-item2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="{{asset('images/tab-3.png')}}"
                                                        alt="">
                                                    <img class="sec-img img-fluid" src="{{asset('images/tab-16.png')}}"
                                                        alt="">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="item-heading d-flex justify-content-between">
                                                    <div class="item-top">
                                                        <ul class="list-unstyled list-inline cate">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-price">
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                                                        atque dolores aliquid culpa maiores beatae est quod officia
                                                        veniam fugit? Molestiae, illum voluptatibus nisi error
                                                        recusandae cum expedita. Laborum, expedita!</p>
                                                    <a href="" class="it-cart"><span class="it-img"><img
                                                                src="{{asset('images/it-cart.png')}}"
                                                                alt=""></span><span class="it-title">Add To
                                                            Cart</span></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                            alt=""></a>
                                                    <a href="" class="it-comp" data-toggle="tooltip"
                                                        data-placement="top" title="Compare"><img
                                                            src="{{asset('images/it-comp.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="tab-item2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid" src="{{asset('images/tab-4.png')}}"
                                                        alt="">
                                                    <img class="sec-img img-fluid" src="{{asset('images/tab-16.png')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="item-heading d-flex justify-content-between">
                                                    <div class="item-top">
                                                        <ul class="list-unstyled list-inline cate">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul>
                                                        <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-price">
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
                                                        atque dolores aliquid culpa maiores beatae est quod officia
                                                        veniam fugit? Molestiae, illum voluptatibus nisi error
                                                        recusandae cum expedita. Laborum, expedita!</p>
                                                    <a href="" class="it-cart"><span class="it-img"><img
                                                                src="{{asset('images/it-cart.png')}}"
                                                                alt=""></span><span class="it-title">Add To
                                                            Cart</span></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                            alt=""></a>
                                                    <a href="" class="it-comp" data-toggle="tooltip"
                                                        data-placement="top" title="Compare"><img
                                                            src="{{asset('images/it-comp.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-box text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">1</a></li>
                            <li class="list-inline-item"><a href="">2</a></li>
                            <li class="active list-inline-item"><a href="">3</a></li>
                            <li class="list-inline-item"><a href="">4</a></li>
                            <li class="list-inline-item"><a href="">...</a></li>
                            <li class="list-inline-item"><a href="">12</a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-angle-right"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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

@endsection