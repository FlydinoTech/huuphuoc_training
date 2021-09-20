@extends('template.booktour.master')
@section('main_content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(img/tour/background/5.jpg)">
        <div class="auto-container">
            <h2>{{ $category->name }}</h2>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li>{{ $category->name }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Services Page Section -->
    <section class="services-page-section style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ $category->name }}</h2>
                <div class="text" style="text-color: black">{{ $category->description }}</div>
            </div>
            <div class="row clearfix">
                @foreach ($tourCategories as $tourCategory)
                    <!-- Service Block -->
                    <div class="service-block-three style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('booktour.book_tour', $tourCategory->id) }}"><img src="{{ $tourCategory->picture_url }}" alt="" style="height: 250px" /></a>
                            </div>
                            <div class="lower-content" style="height: 400px">
                                <h3><a href="{{ route('booktour.book_tour', $tourCategory->id) }}">{{ $tourCategory->name }}</a></h3>
                                <div class="text">{{ $tourCategory->description }}</div>
                                <a href="{{ route('booktour.book_tour', $tourCategory->id) }}" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="shop-pagination" style="margin-left: 500px">
                {{ $tourCategories->links() }}
            </div>
        </div>
    </section>
    <!-- End Story Section -->
@stop