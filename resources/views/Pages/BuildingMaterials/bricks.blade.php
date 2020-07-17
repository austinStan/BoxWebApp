@extends('master.master')
@section('title', 'Land')
@section('assets')
@include('_scripts.masaka_css')
@endsection
@section('content')

<div class='container'>
    <div class="bs-example">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item">BuildingMaterials</li>
                <li class="breadcrumb-item active">Bricks</li>
            </ol>
        </nav>
    </div>
    <div class='row'>
        <div class='col-md-3'>
            {{-- <h3 class="mt-0 mb-5">Results <span class="text-primary found-number">6</span></h3> --}}
            <h6 class="text-uppercase font-weight-bold mb-3">Favourite Brands</h6>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-2">
                    <label class="custom-control-label" for="category-2">Mpigi Swp Enterprises Limited</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-3">
                    <label class="custom-control-label" for="category-3">Lims General Merchandise Ltd</label>
                </div>
            </div>
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price Ranges</h6>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-1">
                    <label class="custom-control-label" for="filter-size-1">150,000-300,000 UGX</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-2">
                    <label class="custom-control-label" for="filter-size-2">300,000-450,000 UGX</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-3">
                    <label class="custom-control-label" for="filter-size-3">450,000-500,000 UGX</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-4">
                    <label class="custom-control-label" for="filter-size-4">500,000-800,000 UGX</label>
                </div>
            </div>
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <a href="#" class="btn btn-lg btn-block btn-primary mt-3 update-btn">Update Results</a>
        </div>
        <div class='col-md-9'>
            <div>
                <h1>Bricks</h1>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                        <label class="mr-2">Sort by:</label>
                        <a class="btn btn-lg btn-light dropdown-toggle relevance-btn" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false">Relevance <span
                                class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start"
                            style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">Relevance</a>
                            <a class="dropdown-item" href="#">Price Descending</a>
                            <a class="dropdown-item" href="#">Price Ascending</a>
                            <a class="dropdown-item" href="#">Best Selling</a>
                        </div>
                    </div>
                    <div class="dropdown float-right">
                        <label class="mr-2">View:</label>
                        <a class="btn btn-lg btn-light dropdown-toggle view-btn" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">9 <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                            x-placement="bottom-end"
                            style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                            <a class="dropdown-item" href="#">12</a>
                            <a class="dropdown-item" href="#">24</a>
                            <a class="dropdown-item" href="#">48</a>
                            <a class="dropdown-item" href="#">96</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-4">
                    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img
                                src="assets/img/BuildingMaterials/bricks.png" height='358px' width='228px'></a>
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true">Fire bricks</a> </div>
                                {{-- <div class="col-md-4">
                                    <div class="rating text-right"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div> --}}
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right buy-now"
                                data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">UGX 50,000</span> </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img
                                src="assets/img/BuildingMaterials/brick1.png" height='358px' width='228px'></a>
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true">Concrete bricks</a> </div>
                                {{-- <div class="col-md-4">
                                    <div class="rating text-right"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div> --}}
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right buy-now"
                                data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">UGX 50,000</span> </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img
                                src="assets/img/BuildingMaterials/bricks.png" height='358px' width='228px'></a>
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true">Fire bricks</a> </div>
                                {{-- <div class="col-md-4">
                                    <div class="rating text-right"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div> --}}
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right buy-now"
                                data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">UGX 50,000</span> </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img
                                src="assets/img/BuildingMaterials/brick2.png" height='358px' width='228px'></a>
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true">Half bricks</a> </div>
                                {{-- <div class="col-md-4">
                                    <div class="rating text-right"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div> --}}
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right buy-now"
                                data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">UGX 60,000</span> </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img
                                src="assets/img/BuildingMaterials/brick1.png" height='358px' width='228px'></a>
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true">Concrete bricks</a> </div>
                                {{-- <div class="col-md-4">
                                    <div class="rating text-right"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div> --}}
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right buy-now"
                                data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">UGX 50,000</span> </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img
                                src="assets/img/BuildingMaterials/bricks.png" height='358px' width='228px'></a>
                        <figcaption class="info-wrap">
                            <div class="row">
                                <div class="col-md-8"> <a href="#" class="title" data-abc="true">Fire bricks</a> </div>
                                {{-- <div class="col-md-4">
                                    <div class="rating text-right"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div> --}}
                            </div>
                        </figcaption>
                        <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right buy-now"
                                data-abc="true"> Buy now </a>
                            <div class="price-wrap"> <span class="price h5">UGX 50,000</span> </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@section('scripts')
@include('_scripts.masaka_js')
@endsection
@endsection