@extends('master.master')
@section('title', 'Land')
@section('assets')
@include('_scripts.masaka_css')
@endsection
@section('content')

<div class='container'>
    {{-- <div class="alert alert-info alert-dismissible fade show m-2 box-offer">
		<div class="well well-lg offer-box text-center">
			Today's Box Offers : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off on purchase of UGX 500,000
			and above till 24 dec !
		</div>
		<button type="button" class="close" data-dismiss="alert">&times;</button>
    </div> --}}
    <div class="bs-example">
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item">Houses</li>
				<li class="breadcrumb-item active">Wakiso</li>
			</ol>
		</nav>
    </div>
    <div class='row'>
        <div class='col-md-3'>
            {{-- <h3 class="mt-0 mb-5">Results <span class="text-primary found-number">6</span></h3> --}}
            <h6 class="text-uppercase font-weight-bold mb-3">Categories</h6>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-1">
                    <label class="custom-control-label" for="category-1">Single family House</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-2">
                    <label class="custom-control-label" for="category-2">Apartment</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-3">
                    <label class="custom-control-label" for="category-3">Bungalow</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-3">
                    <label class="custom-control-label" for="category-3">Castle</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="category-3">
                    <label class="custom-control-label" for="category-3">Beach House</label>
                </div>
            </div>
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price Ranges</h6>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-1">
                    <label class="custom-control-label" for="filter-size-1">50-100 M</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-2">
                    <label class="custom-control-label" for="filter-size-2">100-250M</label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-3">
                    <label class="custom-control-label" for="filter-size-3">250-400M </label>
                </div>
            </div>
            <div class="mt-2 mb-2 pl-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filter-size-4">
                    <label class="custom-control-label" for="filter-size-4">400-500M</label>
                </div>
            </div>
            <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
            <a href="#" class="btn btn-lg btn-block btn-primary mt-3 update-btn">Update Results</a>        
        </div>
        <div class='col-md-9'>
            <div><h1>Houses On Sale</h1></div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                        <label class="mr-2">Sort by:</label>
                        <a class="btn btn-lg btn-light dropdown-toggle relevance-btn" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Relevance <span class="caret"></span></a>
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
            <div class ='row'>
                <div class="container mb-5">
                    <div class='row'>
                        <div class="col-md-4 col-lg-4 mt-2">
                            <div class="p-4 bg-white rounded">
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                                        <div><i class="fa fa-heart-o ml-2"></i></div>
                                    </div>
                                    <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="assets/img/House/house.png" height="250"></div>
                                    <div class="text-center"><span class="p-name">Busukuma Bungalow</span></div>
                                    <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                        <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                        <div class="buttons">
                                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-white border-dark price" type="button">UGX 130M</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 mt-2">
                            <div class="p-4 bg-white rounded">
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                                        <div><i class="fa fa-heart-o ml-2"></i></div>
                                    </div>
                                    <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="assets/img/House/house.png" height="250"></div>
                                    <div class="text-center"><span class="p-name">Kakira Town</span></div>
                                    <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                        <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                        <div class="buttons">
                                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-white border-dark price" type="button">UGX 140M</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 mt-2">
                            <div class="p-4 bg-white rounded">
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                                        <div><i class="fa fa-heart-o ml-2"></i></div>
                                    </div>
                                    <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="assets/img/House/house.png" height="250"></div>
                                    <div class="text-center"><span class="p-name">Makindye Town</span></div>
                                    <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                        <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                        <div class="buttons">
                                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-white border-dark price" type="button">UGX 140M</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4 col-lg-4 mt-2">
                                <div class="p-4 bg-white rounded">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                                            <div><i class="fa fa-heart-o ml-2"></i></div>
                                        </div>
                                        <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="assets/img/House/house3.png" height="250"></div>
                                        <div class="text-center"><span class="p-name">Katabi Town</span></div>
                                        <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                            <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="buttons">
                                                <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-white border-dark price" type="button">UGX 100M</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 mt-2">
                                <div class="p-4 bg-white rounded">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                                            <div><i class="fa fa-heart-o ml-2"></i></div>
                                        </div>
                                        <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="assets/img/House/house3.png" height="250"></div>
                                        <div class="text-center"><span class="p-name">Gombe Town</span></div>
                                        <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                            <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="buttons">
                                                <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-white border-dark price" type="button">UGX 130M</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 mt-2">
                                <div class="p-4 bg-white rounded">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row justify-content-between align-items-center mb-2"><span class="item px-2 rounded">New</span>
                                            <div><i class="fa fa-heart-o ml-2"></i></div>
                                        </div>
                                        <div class="mb-2 p-image"><img class="img-fluid img-responsive rounded" src="assets/img/House/house3.png" height="250"></div>
                                        <div class="text-center"><span class="p-name">Kasanje Town</span></div>
                                        <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                            <div class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="buttons">
                                                <div class="btn-group btn-group-sm" role="group"><button class="btn btn-outline-primary text-white border-dark price" type="button">UGX 200M</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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