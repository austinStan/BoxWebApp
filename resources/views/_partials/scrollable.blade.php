<section class="top-bar2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-left d-flex">
                    <div class="social-icons pull-left">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><i class="fa fa-whatsapp px-2 "></i>+256 (785) 18 9296</li>
                           
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
                        @guest
                        <li class="list-inline-item"><a href="{{route('register')}}"><i
                                    class="fa fa-user"></i>Register</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-share-square"></i>Checkout</a></li>
                        <li class="list-inline-item"><a href="{{route('login')}}"><i
                                    class="fa fa-lock"></i>Login</a></li>
                        @else
                        <li class="list-inline-item"><a href="#" class="text-primary">Hi
                                {{Auth::user()->first_name}}</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-share-square"></i>Checkout</a></li>
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