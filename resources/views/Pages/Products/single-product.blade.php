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

<!-- End Preloader -->


<!-- End Logo Area 2 -->



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
                                    <img src="{{asset('storage/'.$single_product->image)}}" height='700px' width='650px'
                                        alt='' class="img-fluid" id='currentImage'>
                                </div>
                            </div>
                            <div class="nav d-flex justify-content-between">
                                @if($single_product->images)
                                @foreach(json_decode($single_product->images,true) as $image)
                                <a class="nav-item nav-link active product-section-thumbnail" data-toggle="tab" href="#sg1">
                                    <img class="img-fluid" src="{{asset('storage/'.$image)}}" alt="">
                                </a>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sg-content">
                            {{-- <div class="pro-tag">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="">Home Appliance ,</a></li>
                                            <li class="list-inline-item"><a href="">Smart Led Tv</a></li>
                                        </ul>
                                    </div> --}}
                            <div class="pro-name">
                                <p>{{$single_product->name}}</p>
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
                            <div class="old-price">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">UGX {{$single_product->price}}</li>
                            </div>
                            </ul>
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
                                            <input type="number" step="1" min="1" max="10" value="1" class="qty text"
                                                size="4" readonly>
                                            <input type="button" value="+" class="plus">
                                        </li>
                                    </ul>
                                </div>
                                @if($single_product->main_category=='Land' || $single_product->main_category=='Houses'||  $single_product->main_category=='Apartments'||  $single_product->main_category=='Vehicles'||  $single_product->main_category=='Services')
                                <div class="pro-btns">
                                    <a href="" class="cart">Purchase</a>
                                    <a href="" class="fav-com" data-toggle="tooltip" data-placement="top"
                                        title="Wishlist"><img src="{{asset('images/it-fav.png')}}" alt=""></a>

                                </div>
                                @else
                                <div class="pro-btns">
                                <a href="{{route('cart.add',$single_product->id)}}" class="cart">Add To Cart</a>
                                    <a href="" class="fav-com" data-toggle="tooltip" data-placement="top"
                                        title="Wishlist"><img src="{{asset('images/it-fav.png')}}" alt=""></a>

                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="sg-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#pro-det">Product Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rev">Reviews (03)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pro-det" role="tabpanel">
                                    <p>{{$single_product->description}}</p>
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos a
                                                deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut
                                                eveniet repellendus voluptas.</p>
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
                                            <p>Consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto
                                                quae eligendi voluptatem omnis beatae at aut eveniet repellendus
                                                voluptas.</p>
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
                                                        <input type="hidden" name="whatever1" class="rating-value"
                                                            value="0">
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
                                @foreach($cate_products as $cate)
                                <div class="sim-item">
                                    <div class="sim-img">
                                       <a href='{{route('products.show',$cate->slug)}}'> <img class="main-img img-fluid" src="{{asset('storage/'.$cate->image)}}"
                                            height='700px' width='650px'></a>
                                        @if($cate->images)
                                        @foreach(json_decode($cate->images,true) as $image)
                                        <a href='{{route('products.show',$cate->slug)}}'><img class="sec-img img-fluid" src="{{asset('storage/'.$image)}}" alt=""></a>
                                        @endforeach
                                        @endif
                                        <div class="layer-box">
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left"
                                                title="Favourite"><img src="{{asset('images/it-fav.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sim-heading">
                                        <p><a href="{{route('products.show',$cate->slug)}}">{{$cate->name}}</a></p>
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
                                            @if($cate->old_price==null)
                                            <ul class="list-unstyled list-inline one-price">
                                                <li class="list-inline-item">UGX {{$cate->price}}</li>
                                                {{-- <li class="list-inline-item">12M</li> --}}
                                            </ul>
                                            @else
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">UGX {{$cate->price}}</li>
                                                <li class="list-inline-item">UGX {{$cate->old_price}}</li>
                                            </ul>
                                            @endif
                                        </div>
                                        @if($cate->main_category=='Land' || $cate->main_category=='Houses'|| $cate->main_category=='Apartments'||  $cate->main_category=='Vehicles'||  $cate->main_category=='Services')
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                title="BUY"> <i class="fa fa-money" aria-hidden="true"></i></a>
                                        </div>
                                       
                                        @else
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top"
                                                title="Add to Cart"><img src="{{asset('images/it-cart.png')}}" alt=""></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-box">
                    <div class="sec-title">
                        <a href='{{route('products.index')}}'>
                            <h6>Categories</h6>
                        </a>
                    </div>
                    <!-- accordion -->
                    <div id="accordion">
                        @foreach($categories as $category)
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('products.index',['category_id'=>$category->id])}}"
                                    data-toggle="collapse" data-target="#collapse{{$category->id}}">
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
                                        @foreach($children as $child)
                                        <li><a href="{{route('products.index',['category_id'=>$child->id])}}"><i
                                                    class="fa fa-angle-right"></i>{{$child->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="ht-offer">
                    <div class="sec-title">
                        <h6>Hot Offer</h6>
                    </div>
                    <div class="ht-body owl-carousel">
                        @foreach($hot_offer as $hotoffer)
                        <div class="ht-item">
                            <div class="ht-img">
                                <a href="{{route('products.show',$hotoffer->slug)}}"><img src="{{asset('storage/'.$hotoffer->image)}}" alt=""
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
                                <p><a href="{{route('products.show',$hotoffer->slug)}}">{{$hotoffer->name}}</a></p>
                                <ul class="list-unstyled list-inline fav">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                @if($hotoffer->old_price==null)
                                <ul class="list-unstyled list-inline one-price">
                                    <li class="list-inline-item">UGX {{$hotoffer->price}}</li>
                                    {{-- <li class="list-inline-item">12M</li> --}}
                                </ul>
                                @else
                                <ul class="list-unstyled list-inline price">
                                    <li class="list-inline-item">UGX {{$hotoffer->price}}</li>
                                    <li class="list-inline-item">UGX {{$hotoffer->old_price}}</li>
                                </ul>
                                @endif
                            </div>
                        </div>
                        @endforeach
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

<script>
    (function(){
   const currentImage=document.querySelector('#currentImage');
   const images =document.querySelectorAll('.product-section-thumbnail');

   images.forEach((element)=>element.addEventListener('click',thumbnailClick));

   function thumbnailClick(e){
       currentImage.src=this.querySelector('img').src;

       images.forEach((element)=>element.classList.remove('active'));

       this.classList.add('active');
   }


    })();


</script>


@endsection