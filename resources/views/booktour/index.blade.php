@extends('template.booktour.master')
@section('main_content')
    <!-- Services Section Three -->
    <section class="services-section-three" >
        <div class="auto-container" >
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2>One stop for home interiors</h2>
                <div class="text">To give you a home that lasts, we bring you only the best in everything — quality raw materials, state-of-the-art manufacturing, rigorous quality checks, professional installations and transparent prices.</div>
            </div>
            <div class="row clearfix" > 
                @foreach ($categories as $category)
                    <!-- Service Block -->
                    <div class="service-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('booktour.category_tour', $category->id) }}"><img src="{{ $category->picture_url }}" alt="" style="height: 250px"/></a>
                            </div>
                            <div class="lower-content" style="height: 450px">
                                <h3><a href="{{ route('booktour.category_tour', $category->id) }}">{{ $category->name }}</a></h3>
                                <div class="text">{{ $category->description }}</div>
                                <a href="{{ route('booktour.category_tour', $category->id) }}" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="shop-pagination" style="margin-left: 500px">
                {{ $categories->links() }}
            </div>
        </div>
    </section>
    <!-- End Services Section -->
@stop