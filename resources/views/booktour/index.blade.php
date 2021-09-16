@extends('template.booktour.master')
@section('main_content')
            <!--Travel Banner-->
            <div class="kode_banner" style="background-image: url('/img/tour/destinations02-img6.jpeg')">
                <!--Sub banner for inner pages-->
                <div class="sub-banner">
                    <div class="container">
                        <h2>Du lịch các quốc gia</h2>
                    </div>
                </div>
                <div class="breadcrumb-blog">
                    <ul class="breadcrumb ">
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Category</a></li>
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
                                <ul class="tab-nav-row">
                                    <li><a href=""><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="destination-blog-01">
                            <div class="row">
                                @foreach ($categories as $category)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="destination-grid">
                                            <img src="{{ $category->picture_url }}" style="width: 369px; height: 294px" alt="img here">
                                            <div class="destination-grid-content">
                                                <h5><a href="{{ route('booktour.category_tour', [$category->id]) }}">{{ $category->name }}</a></h5>
                                                <p>{{ $category->description }}</p>
                                                <a href="{{ route('booktour.category_tour', [$category->id]) }}" class="arrow-btn">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@stop