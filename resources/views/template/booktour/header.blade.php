<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/index-2.html  30 Nov 2019 03:46:47 GMT -->
<head>
<meta charset="utf-8">
<title>Stella Orr'e - Interior and Home Renovation HTML Template | Home Page 02</title>
<!-- Stylesheets -->
{!! Html::style('css/tour/bootstrap.css') !!}
{!! Html::style('css/tour/responsive.css') !!}
{!! Html::style('css/tour/style.css') !!}
{!! Html::style('css/tour/app.css') !!}

<link rel="shortcut icon" href="/img/tour/favicon.png" type="image/x-icon">
<link rel="icon" href="/img/tour/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="dark-layout">
<div class="page-wrapper">
    <!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="outer-container clearfix">
                <!--Info-->
                <div class="logo-outer">
                    <div class="logo"><a href="{{ route('booktour.index') }}"><img src="/img/tour/logo.png" alt="" title=""></a></div>
                </div>
                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-1"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown">
                                    <a href="{{ route('booktour.index') }}">Home</a>
                                </li>
                                <li class="dropdown"><a href="{{ route('booktour.all_tour') }}">All Tour</a></li>
                                <li class="dropdown"><a href="{{ route('booktour.shop') }}">Shop</a>
                                    <ul>
                                        <li><a href="{{ route('booktour.shop') }}">Shop</a></li>
                                        <li><a href="{{ route('booktour.product') }}">Product Detail Page</a></li>
                                        <li><a href="{{ route('booktour.cart') }}">Cart</a></li>
                                        <li><a href="{{ route('booktour.checkout') }}">Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('booktour.contact') }}">Contact</a></li>
                                <li class="dropdown"><a href="">Account</a>
                                    <ul>
                                        <li><a href="{{ route('auth.login') }}">Login</a></li>
                                        <li><a href="{{ route('auth.register') }}">Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!-- Outer Box -->
                    <div class="outer-box clearfix">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="/img/tour/logo.png" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
        
    </header>
    <!-- End Main Header -->