<section class="logo-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src={{asset("images/logo/set.png")}} alt="" width='100px' height='90px'
                            style="border-radius:5px; padding-top:20px;">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 padding-fix">
                <form action="#" class="search-bar d-flex">
                    <input type="text" name="search-bar" placeholder="I'm looking for...">
                    <div class="search-cat">
                        <select class="form-control scat-id">
                            <option> <a href='{{route('products.index')}}'>All Categories</a></option>
                            @foreach($categories as $category)
                            <option><a
                                    href="{{route('products.index',['category_id'=>$category->id])}}">{{$category->name}}</a>
                            </option>
                            @endforeach
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
                        @if(auth::check())
                        <a href="{{route('cart.index')}}" data-toggle="tooltip" data-placement="top"
                            title="Shopping Cart" class="">
                            <img src="{{asset('images/cart.png')}}" alt="cart">
                            <span>{{ \Cart::session(auth()->id())->getContent()->count()}}</span>
                        </a>
                        @else
                        <a href="{{route('login')}}" data-toggle="tooltip" data-placement="top"
                        title="Shopping Cart" class="">
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