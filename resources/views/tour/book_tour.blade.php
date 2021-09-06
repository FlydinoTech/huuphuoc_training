@extends('template.tour.master')
@section('main_content')
			<!--Travel Banner-->
			<div class="banner-slider">
				<!--Banner slides-->
				<div class="items">
					<div class="banner-img banner-overlay">
						<img src="{{ $tours->picture_url }}" alt="banner img 1">
					</div>
					<div class="container banner-caption position-left">
						<div class="title-1 animated"><strong>{{ $tours->name }}</strong></div>
						<div class="title-1 animated">{{ $tours->category_name }}</div>
						<div class="title-3 animated ">{{ $tours->description}}</div>
						<div class="title-3 btn-normal-1 animated effect2-color-1">{{ $tours->day}} ngày/ {{ $tours->night }} đêm</div>
						<div class="title-3 btn-normal-1 animated effect2-color-1">{{ number_format($tours->price * (1 - $tours->discount/100)) }} đ</div>
					</div>
				</div>
			</div>
			<!--Banner slider ends-->

			<!--Travel Banner ends-->
			<div class="content">
				<!--Travel search engine-->
				<form class="travel_search_engine" style="margin-bottom: 100px">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="">
									<div class="kode_write_detail search-img01 tab-pane " role="tabpanel" id="tab-1">
										<h5 class="title-icon"><span class="icon-travel"></span><b>Book Tour</b></h5>
										<div class="booking_content">
											<!--Travel location finder-->
											<div class="kode_felid">
												<label>Nơi đến</label>
												<div class="ralative-icon">
													<input type="text" class="location-finder" placeholder="City, Region, Conuntry, landmark, Hotel, Dist">
													<span class="icon-signs"></span>
												</div>
											</div>
											<!--Travel location finder ends-->
											<div class="booking_content">
												<div class="row">
													<div class="col-md-5 col-xs-12 col-sm-6">
														<!--Travel check in calender-->
														<div class="kode_felid">
															<label>Ngày xuất phát</label>
															<div class="ralative-icon">
																<input class="checkin" type="text">
																<span class="fa fa-calendar"></span>
															</div>
														</div>
													</div>
													<div class="col-md-5 col-xs-12 col-sm-6">
														<!--Travel check out calender-->
														<div class="kode_felid">
															<label>Số điện thoại</label>
															<div class="ralative-icon">
																<input class="checkout" type="text">
																<span class="fa fa-phone"></span>
															</div>
														</div>
													</div>
													<div class="col-md-2 col-xs-12 col-sm-12">
														<!--Travel booking submit-->
														<div class="submit-form">
															<button type="button" class="btn-normal-1 animated effect2-color-1">Đặt ngay</button>
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
				</form>
				<!--Travel search engine ends-->
			</div>
@stop