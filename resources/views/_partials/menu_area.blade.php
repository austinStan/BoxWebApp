<section class="menu-area2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="sidemenu">
                    <p><a href="{{route('products.index')}}" class='text-white'>All Categories <i
                                class="fa fa-bars"></i></a></p>
                    <ul class="list-unstyled gt-menu">
                        @foreach($categories as $category)
                        <li><a href="{{route('products.index',['category_id'=>$category->id])}}">{{$category->name}}<i
                                    class="fa fa-angle-right"></i></a>
                            <?php $children= TCG\Voyager\Models\Category::where('parent_id',$category->id)->get();
                            ?>
                            @if($children->isNotEmpty())
                            <div class="mega-menu">
                                <div class="row">
                                    @foreach($children as $child)
                                    <div class="col-md-4">
                                        <div class="smartphone">
                                            <a href='{{route('products.index',['category_id'=>$child->id])}}'>
                                                <h6>{{$child->name}}</h6>
                                            </a>
                                            <?php $grandchild= TCG\Voyager\Models\Category::where('parent_id',$child->id)->get();
                                             ?>
                                            @if($grandchild->isNotEmpty())
                                            @foreach($grandchild as $gc)
                                            <a
                                                href="{{route('products.index',['category_id'=>$gc->id])}}">{{$gc->name}}</a>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </li>
                        @endif
                        @endforeach
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