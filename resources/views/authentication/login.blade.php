@extends('Pages.index')

@section('title', 'Login')

@section('content')
<!-- Top Bar 2 -->
<section class="top-bar2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-left d-flex">
                    <div class="social-icons pull-left">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="call-us">
                        <p><img src="images/phn.png" alt="">+256 (759) 18 9296</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-right text-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href=""><i class="fa fa-user"></i>My Account</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-heart "></i>Wishlist</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-share-square "></i>Checkout</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-lock "></i>Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem est eum earum eius dolores,
                        alias modi aut officia quo perferendis id aspernatur neque provident quas, quidem libero
                        veritatis voluptatum illum!</p>
                    <a href="{{route('register')}}">Create an Account</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="r-customer">
                    <h5>Registered Customer</h5>
                    <p>If you have an account with us, please log in.</p>
                    <form action="{{route('login')}}" method="POST">
                        <div class="emal">
                            <label>Email address</label>
                            <input type="text" name="eml">
                        </div>
                        <div class="pass">
                            <label>Password</label>
                            <input type="text" name="pass">
                        </div>
                        <div class="d-flex justify-content-between nam-btm">
                            <div>
                                <input type="checkbox" name="rememberme" id="rmme">
                                <label for="rmme">Remember Me</label>
                            </div>
                            <div>
                                <a href="">Lost your password?</a>
                            </div>
                        </div>
                        <button type="button" name="button">Log In</button>
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

@endsection