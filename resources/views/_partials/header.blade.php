    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        {{-- <a href="index.html"><img src="assets/img/logo/boxlogo.png" alt=""></a> --}}
                        <a href="index.html"><h4>BOX</h4></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li class="hot"><a href="#">Latest</a>
                                </li>
                                <li><a href="#">Find Store</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="#"><span  class="flaticon-user">Login</span></a>
                            </li>
                            <li><a href="#"><span class="flaticon-shopping-cart">trolley</span></a> </li>
                        </ul>
                    </div>
                </div>
                <div class='search'>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-secondary search-btn" type="button">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                      {{-- <div class="follow-us">
                        <ul class="pull-right">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div> --}}
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
                <div class='mega-menu'>
                   @include('_partials.megamenu')
                </div>
            </div>
        </div>
    </div>

