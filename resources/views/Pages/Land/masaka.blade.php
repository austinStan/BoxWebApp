@extends('master.master')
@section('title', 'Land')
@section('assets')
@include('_scripts.masaka_css')
@endsection
@section('content')
<div class='container'>
	<div class="alert alert-info alert-dismissible fade show m-2 box-offer">
		<div class="well well-lg offer-box text-center">
			Today's Box Offers : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off on purchase of UGX 500,000
			and above till 24 dec !
		</div>
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
	<div class="bs-example">
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item">Land</li>
				<li class="breadcrumb-item active">Masaka</li>
			</ol>
		</nav>
	</div>
	<div class='row'>
		<div class='col-md-2'>
			@include('_partials.masaka.filter')
		</div>
		<div class='col-md-10'>
				@include('_partials.masaka.items')
		</div>
	</div>
	<div class='row mt-5'>
		<div class='container'>
			<div class="col-md-12">
				<h2>Similar <b>Acres On Sale</b></h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for carousel items -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>50 acres in Lamidera , Gulu</h4>
											<p class="item-price"><strike>UGX 40M</strike> <span>UGX 30M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>150acres in Lyantodde</h4>
											<p class="item-price"><strike>UGX 55M</strike> <span>UGX 40M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>200 acres in Kasokoso, Luweero</h4>
											<p class="item-price"><strike>UGX 100M</strike> <span>UGX 900M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>200 acres in Kanungu</h4>
											<p class="item-price"><strike>UGX 30M</strike> <span>UGX 25M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>10 acres in Mpigi</h4>
											<p class="item-price"><strike>UGX 30M</strike> <span>UGX 20M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>55 acres in Mbarara</h4>
											<p class="item-price"><strike>UGX 40M</strike> <span>UGX 50M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>200 acres in Kotido</h4>
											<p class="item-price"> <span>UGX 400M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>70 Acres in Yumbe Town</h4>
											<p class="item-price"><strike>UGX 60M</strike> <span>UGX 40M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>120 acres in Maracha,Adjumani</h4>
											<p class="item-price"><span>UGX 50M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>500 acres in Arua</h4>
											<p class="item-price"><strike>UGX 500M</strike> <span>UGX 400M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>140 acres in matugga,Wakiso</h4>
											<p class="item-price"><strike>UGX 400M</strike> <span>UGX 350M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="assets/img/Land/masaka2.jpg" class="img-fluid" alt="">
										</div>
										<div class="thumb-content">
											<h4>40 acres in Ntinda ,Kampala</h4>
											<p class="item-price"><strike>UGX 250M</strike> <span>UGX 200M</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<a href="#" class="btn btn-primary">BUY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Carousel controls -->
					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@section('scripts')
@include('_scripts.masaka_js')
@endsection
@endsection