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
                                @foreach ($tours as $tour)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="kf_column_trip hover-effect-01">
                                            <div class="kf_column-figure">
                                                <figure>
                                                    <a href="{{ route('tour.book_tour', [$tour->slug_tour, $tour->id]) }}" data-rel="prettyPhoto">
                                                    <img src="{{ $tour->picture_url }}" style="width: 354px; height: 261px" alt="img here">
                                                    </a>
                                                    <div class="hover-content-01"></div>
                                                    <figcaption class="">
                                                        <ul class="kf_meta_2">
                                                            <li><span class="fa fa-clock-o"></span><a href="#">{{ $tour->day }} days</a></li>
                                                            <li><a href="#">{{ $tour->night }} nights</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                                <div class="bottom-price">
                                                    <span class="radio-price" style="width: 100px">{{ number_format($tour->price) }} đ</span>
                                                </div>
                                            </div>
                                            <div class="kf_trip_content" style="height: 300px">
                                                <h4><a href="{{ route('tour.book_tour', [$tour->slug_tour, $tour->id]) }}">{{ $tour->name }}</a></h4>
                                                <p>{{ $tour->description }}</p>
                                                <h5 style="color: red">Giảm giá : {{ $tour->discount }}%</h5>
                                            </div>
                                            <ul class="booking-bottom">
                                                <li><a href="{{ route('tour.book_tour', [$tour->slug_tour, $tour->id]) }}" class="btn-blog ">Book Now</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="pagination">
                                    <nav aria-label="Page Navigation">
                                        {{ $tours->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@stop