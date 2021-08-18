@extends('template.room.master')
@section('main_content')
			<!--Travel Banner-->
			<div class="kode_banner">
				<!--Sub banner for inner pages-->
				<div class="sub-banner">
					<div class="container">
						<h2>all tours</h2>
						<p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse <br>id pharetra lacus, et hendrerit mi quis leo elementum.</p>
					</div>
				</div>
				<div class="breadcrumb-blog">
					<ul class="breadcrumb orange-bg">
						<li><a href="#">tour</a></li>
						<li class="active"><a href="#">tour 01</a></li>
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
							<div class="pull-right">
								<div class="dropdown-select-01">
									<select class="select">
										<option>sort by: Name</option>
										<option>sort by: Name</option>
										<option>sort by: Name</option>
									</select>
								</div>
								<div class="dropdown-select-01">
									<select class="select">
										<option>show:9</option>
									</select>
								</div>
								<ul class="tab-nav-row">
									<li><a href=""><i class="fa fa-bars" aria-hidden="true"></i></a></li>
									<li><a href=""><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="div">
							<div class="row">
								<!--Travel columns-->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img1.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img1.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="{{ route('room.booktour')}}" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img2.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img2.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img3.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img3.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img4.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img4.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img5.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img5.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img6.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img6.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img7.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img7.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img8.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img8.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="kf_column_trip hover-effect-01">
										<div class="kf_column-figure">
											<figure>
												<a href="{{$publicUrl}}\extra-images\blog-img9.jpeg" data-rel="prettyPhoto">
												<img src="{{$publicUrl}}\extra-images\blog-img9.jpeg" alt="img here">
												</a>
												<div class="hover-content-01"></div>
												<figcaption class="">
													<ul class="kf_icons_meta">
														<li><a href="#" class="icon-travel"></a></li>
														<li><a href="#" class="fa fa-plane"></a></li>
														<li><a href="#" class="fa fa-car"></a></li>
													</ul>
													<ul class="kf_meta_2">
														<li><span class="fa fa-clock-o"></span><a href="#">5 days</a></li>
														<li><a href="#">6 nights</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="bottom-price">
												<span class="radio-price">$550</span>
											</div>
										</div>
										<div class="kf_trip_content">
											<ul class="kf_meta_2 bk-colr">
												<li><a href="#">France</a></li>
												<li><a href="#">Paris</a></li>
											</ul>
											<h4><a href="#">Paris Special Tour </a></h4>
											<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>
											<ul class="kf_reviews">
												<li>
													<div class="rateing"></div>
												</li>
												<li><span>232 Reviews</span></li>
											</ul>
										</div>
										<ul class="booking-bottom">
											<li><a href="#" class="btn-blog ">Book Now</a></li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-eye" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-eye" aria-hidden="true"></i>200 view</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons thumb-view">
																<span><i class="fa fa-heart-o" aria-hidden="true"></i>140 like</span>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="dropdown">
													<button class="dropdown-toggle btnact" type="button" data-toggle="dropdown"><i class="icon-share" aria-hidden="true"></i></button>
													<ul class="dropdown-menu animated">
														<li>
															<div class="social-icons">
																<ul class="kode_social_icons">
																	<li><a href="#" title="like facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
																	<li><a href="#" title="twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
																	<li><a href="#" title="google mail"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
																	<li><a href="#" title="follow me instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
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