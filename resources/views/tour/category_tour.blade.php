@extends('template.tour.master')
@section('main_content')
			<!--Travel Banner-->
			<div class="kode_banner" style="background-image: url({{$category->picture_url}})">
				<!--Sub banner for inner pages-->
				<div class="sub-banner">
					<div class="container">
						<h2>Du lịch {{ $category->name }} </h2>
						<p>{{ $category->description }}</p>
					</div>
				</div>
				<div class="breadcrumb-blog">
					<ul class="breadcrumb orange-bg">
						<li><a href="#">Category</a></li>
						<li class="active"><a href="#">{{ $category->name }}</a></li>
					</ul>
				</div>
			</div>
			<!--Travel Banner ends-->
			<div class="content">
				<!--Travel Blog Detail Content-->
				<section>
					<div class="container">
						<div class="top-row margin-bottom-30">
							<div class="page-info">
								<p>Showing 1 to 6 of 200 Total</p>
							</div>
						</div>
						<div class="div">
							<div class="row">
								<!--Travel columns-->
								@foreach ($tours as $tours)
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="kf_column_trip hover-effect-01">
											<div class="kf_column-figure">
												<figure>
													<a href="{{ route('tour.book_tour', [$tours->slug_tour, $tours->id]) }}" data-rel="prettyPhoto">
													<img src="{{ $tours->picture_url }}" style="width: 354px; height: 261px" alt="img here">
													</a>
													<div class="hover-content-01"></div>
													<figcaption class="">
														<ul class="kf_meta_2">
															<li><span class="fa fa-clock-o"></span><a href="#">{{ $tours->day }} days</a></li>
															<li><a href="#">{{ $tours->night }} nights</a></li>
														</ul>
													</figcaption>
												</figure>
												<div class="bottom-price">
													<span class="radio-price" style="width: 100px">{{ number_format($tours->price) }} đ</span>
												</div>
											</div>
											<div class="kf_trip_content" style="height: 250px">
												<h4><a href="{{ route('tour.book_tour', [$tours->slug_tour, $tours->id]) }}">{{ $tours->name }}</a></h4>
												<p>{{ $tours->description }}</p>
												<h5 style="color: red">Giảm giá : {{ $tours->discount }}%</h5>
											</div>
											<ul class="booking-bottom">
												<li><a href="{{ route('tour.book_tour', [$tours->slug_tour, $tours->id]) }}" class="btn-blog ">Book Now</a></li>
											</ul>
										</div>
									</div>
								@endforeach
								<div class="pagination">
									<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a href="#" class="active">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<a href="#">4</a>
									<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop