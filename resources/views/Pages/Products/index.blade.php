@extends('Pages.index')

@section('title', $categoryName)

@section('content')
<!-- Top Bar 2 -->
@include('_partials.scrollable')
<!-- End Top Bar 2 -->
<!-- Logo Area 2 -->
@include('_partials.logo_area')
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
                        <li class="list-inline-item"><span>||</span><a href="">{{$categoryName}}</a></li>
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
                      <a href='{{route('products.index')}}'><h6>Categories</h6></a>
                    </div>
                    <!-- accordion -->
                    <div id="accordion">
                        @foreach($categories as $category)
                        <div class="card">
                            <div class="card-header">
                            <a href="{{route('products.index',['category_id'=>$category->id])}}" data-toggle="collapse" data-target="#collapse{{$category->id}}">
                                <span>{{$category->name}}</span>
                                    <i class="fa fa-angle-down"></i>
                                 
                                </a>
                            </div>
                            <?php $children= TCG\Voyager\Models\Category::where('parent_id',$category->id)->get();
                            ?>
                              @if($children->isNotEmpty())
                        <div id="collapse{{$category->id}}" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        @foreach($children as  $child)
                                    <li><a href="{{route('products.index',['category_id'=>$child->id])}}"><i class="fa fa-angle-right"></i>{{$child->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endforeach
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
                    <a href=""><img src="{{asset('images/banners/try.png')}}" alt="" class="img-fluid"></a>
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
                                @foreach($products as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="tab-item">
                                        <div class="tab-img">
                                            <a href='{{route('products.show',$product->slug)}}'><img class="main-img img-fluid" src="{{asset('storage/'.$product->image)}}"
                                                height='700px' width='650px' alt=""></a>
                                            <span class="sale">Sale</span>
                                            @if($product->images)
                                            @foreach(json_decode($product->images,true) as $image)
                                          <a href='{{route('products.show',$product->slug)}}'><img class="sec-img img-fluid" src="{{asset('storage/'.$image)}}" alt=""></a>
                                            @endforeach
                                            @endif
                                            <div class="layer-box">
                                                <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                    title="Favourite"><img src="{{asset('images/it-fav.png')}}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-heading">
                                        <p><a href="{{route('products.show',$product->slug)}}">{{$product->name}}</a></p>
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
                                                @if($product->old_price==null)
                                                <ul class="list-unstyled list-inline one-price">
                                                    <li class="list-inline-item">UGX {{$product->price}}</li>
                                                    {{-- <li class="list-inline-item">12M</li> --}}
                                                </ul>
                                                @else
                                                <ul class="list-unstyled list-inline price">
                                                    <li class="list-inline-item">UGX {{$product->price}}</li>
                                                    <li class="list-inline-item">UGX {{$product->old_price}}</li>
                                                </ul>
                                                @endif
                                            </div>
                                            @if($product->main_category=='Land' || $product->main_category=='Houses'||  $product->main_category=='Apartments'||  $product->main_category=='Vehicles'||  $product->main_category=='Services')
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="BUY"><i class="fa fa-money" aria-hidden="true"></i></a>
                                            </div>
                                            @else
                                            <div>
                                                <a href="" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Cart"><img src="{{asset('images/it-cart.png')}}"
                                                        alt=""></a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-lg-12 col-md-6">
                                    <div class="tab-item2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{asset('storage/'.$product->image)}}" alt="">
                                                    @if($product->images)
                                                    @foreach(json_decode($product->images,true) as $image)
                                                    <img class="sec-img img-fluid" src="{{asset('storage/'.$image)}}"
                                                        alt="">
                                                    @endforeach
                                                    @endif
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="item-heading d-flex justify-content-between">
                                                    <div class="item-top">
                                                        {{-- <ul class="list-unstyled list-inline cate">
                                                            <li class="list-inline-item"><a href="#">Home Appliance,</a></li>
                                                            <li class="list-inline-item"><a href="#">Smart Led</a></li>
                                                        </ul> --}}
                                                        <p><a href="">{{$product->name}}</a></p>
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
                                                        @if($product->old_price==null)
                                                        <ul class="list-unstyled list-inline one-price">
                                                            <li class="list-inline-item">UGX {{$product->price}}</li>
                                                            {{-- <li class="list-inline-item">12M</li> --}}
                                                        </ul>
                                                        @else
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">UGX {{$product->price}}</li>
                                                            <li class="list-inline-item">UGX {{$product->old_price}}</li>
                                                        </ul>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <p>{{$product->description}}</p>
                                                    @if($product->main_category=='Land' || $product->main_category=='Houses'||  $product->main_category=='Apartments'||  $product->main_category=='Vehicles'||  $product->main_category=='Services')
                                                    <a href="" class="it-cart"><span class="it-img"><i class="fa fa-money" aria-hidden="true"></i></span><span
                                                            class="it-title">BUY</span></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                    @else
                                                    <a href="" class="it-cart"><span class="it-img"><img
                                                        src="images/it-cart.png" alt=""></span><span
                                                    class="it-title">Add To Cart</span></a>
                                                    <a href="" class="it-fav" data-toggle="tooltip" data-placement="top"
                                                        title="Favourite"><img src="images/it-fav.png" alt=""></a>
                                                    @endif
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $products->appends(request()->input())->links()}}
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