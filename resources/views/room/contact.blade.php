@extends('template.room.master')
@section('main_content')
			<!--Travel Banner-->
			<div class="kode_banner">
				<!--Sub banner for inner pages-->
				<div class="sub-banner">
					<div class="container">
						<h2>contact us</h2>
						<p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse <br>id pharetra lacus, et hendrerit mi quis leo elementum.</p>
					</div>
				</div>
				<div class="breadcrumb-blog">
					<ul class="breadcrumb orange-bg">
						<li><a href="#">contact us</a></li>
						<li class="active"><a href="#">contact us</a></li>
					</ul>
				</div>
			</div>
			<!--Travel Banner ends-->
			<div class="content">
				<!--Travel contact us Content-->
				<section>
					<div class="container">
						<!--Travel heading-->
						<div class="heading text-align-center">
							<span>About Bon Voyage</span>
							<h2>KEEP IN TOUCH</h2>
						</div>
						<div class="services-blog-choose">
							<div class="row">
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="travel-choose-us">
										<span class="fa fa-phone"></span>
										<h5><a href="#">Phone Number</a></h5>
										<p>760-284-3410<br>760-284-3410</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="travel-choose-us">
                                        <span class="fa fa-envelope-open-o"></span>
										<h5><a href="#">Email Address</a></h5>
										<p>info@easytravel.com<br>Support@easytravel.com</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="travel-choose-us">
										<span class="icon-signs"></span>
										<h5><a href="#">Locations</a></h5>
										<p>1457/784, My Street, Kingston,<br>New York</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="kf_location_review">
					<form>
						<div id="map-general"></div>
						<div class="kf_absolute_review form-box">
							<div class="container">
								<div class="heading text-align-center">
									<span>Nullam dictum feliseu pede mollis pretium.</span>
									<h2>Get Intouch With Us</h2>
								</div>
								<div class="row">
									<div class="col-md-5">
										<div class="text-felid">
											<input type="text" placeholder="Name">
										</div>
										<div class="text-felid">
											<input type="text" placeholder="Email">
										</div>
										<div class="text-felid">
											<input type="text" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-7">
										<div class="text-area">
											<textarea placeholder="Comments"></textarea>
										</div>
										<div class="submit-btn">
											<button class=" btn-normal-1 blue-bg">Send Message</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<section>
					<div class="container">
						<div class="heading text-align-center margin-bottom-30">
							<span>INVESTORS RELATIONS</span>
							<h2>OUR PARTNERS</h2>
						</div>
						<div class="brands-slider">
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img01.png" data-rel="prettyPhoto">
                                <img src="{{ $publicUrl }}/images/brands-img01.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img02.png" data-rel="prettyPhoto">
                                <img src="{{ $publicUrl }}/images/brands-img02.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img03.png" data-rel="prettyPhoto">
                                <img src="{{ $publicUrl }}/images/brands-img03.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img04.png" data-rel="prettyPhoto">
                                <img src="{{ $publicUrl }}/images/brands-img04.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img05.png" data-rel="prettyPhoto">
                                <img src="{{ $publicUrl }}/images/brands-img05.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img06.png" data-rel="prettyPhoto">
                                    <img src="{{ $publicUrl }}/images/brands-img06.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="{{ $publicUrl }}/images/brands-img01.png" data-rel="prettyPhoto">
                                    <img src="{{ $publicUrl }}/images/brands-img01.png" class="visible-1" alt="brand img">
                                </a>
                            </div>
                        </div>
                    </div>
				</section>
			</div>
@stop