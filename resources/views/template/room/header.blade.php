<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Bon Voyage Exotic Tourism Destination HTML Template</title>
  	    <!-- Bootstrap -->
	    <link href="{{url($publicUrl)}}/css/bootstrap.min.css" rel="stylesheet">
	    <!-- font awesome -->
	    <link href="{{url($publicUrl)}}/css/font-awesome.min.css" rel="stylesheet">
	    <!-- animation -->
	    <link href="{{url($publicUrl)}}/css/animation.css" rel="stylesheet">
	    <!-- datepicker -->
	    <link href="{{url($publicUrl)}}/css/datepicker.css" rel="stylesheet">
	    <!-- selectric -->
	    <link href="{{url($publicUrl)}}/css/selectric.css" rel="stylesheet">
	    <!-- slick Slider -->
	    <link href="{{url($publicUrl)}}/css/slick.css" rel="stylesheet">
	    <!-- Responsive -->
	    <link href="{{url($publicUrl)}}/js/responsive-menu/responsive.css" rel="stylesheet">
	    <!-- SVG icons -->
	    <link href="{{url($publicUrl)}}/css/icons.css" rel="stylesheet">
	    <!-- prettyphoto -->
	    <link href="{{url($publicUrl)}}/js/prettyphoto/prettyPhoto.css" rel="stylesheet">
	    <!-- svg-creater -->
	    <link href="{{url($publicUrl)}}/css/svg-creater.css" rel="stylesheet">
	    <!-- typography -->
	    <link href="{{url($publicUrl)}}/css/typography.css" rel="stylesheet">
	    <!-- shortcodes -->
	    <link href="{{url($publicUrl)}}/css/shortcodes.css" rel="stylesheet">
	    <!-- widget -->
	    <link href="{{url($publicUrl)}}/css/widget.css" rel="stylesheet">
	    <!-- colors -->
	    <link href="{{url($publicUrl)}}/css/colors.css" rel="stylesheet">
	    <!-- Style sheet -->
	    <link href="{{url($publicUrl)}}/style.css" rel="stylesheet">
	    <!-- Mobile responsive -->
        <link href="{{url($publicUrl)}}/css/responsive.css" rel="stylesheet">
	    <link rel="icon" type="image/png" href="{{url($publicUrl)}}/favicon-32x32.png" sizes="32x32">
</head>
    <body>
	    <div class="pre-loader">
		    <div class="pre-loader-img"></div>
	    </div>
	    <button id="top-btn"><i class="fa fa-angle-up" data-toggle="tooltip" title="click"></i></button>
        <i class='search-icon-close fa fa-times'></i>
        <div class='form-search-popup container'>
            <form class="kf-search-menu">
                <input class='input-search' placeholder='search ....' type='text'>
                <button><i class='fa fa-search'></i></button>
            </form>
        </div>
	    <div class="wrapper">
		    <!--Header starts version.1-->
		    <header class="header">
	            <!--Header top row version.1-->
	            <div class="header_v1_top_row">
	               <!--Header container version.1-->
	               <div class="container">
	                  <!--Header left side version.1-->
	                  <div class="kf_element_left">
	                    <ul class="kode_social_icons">
	                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
	                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	                    </ul>
	                  </div>
	                  <!--Header center side version.1-->
	                  <div class="header_v1_slider text-align-center">
	                     <div class="fade-slider">
	                        <div class="items">
	                           <p>offer: Worldwide tour 50% off  <a href="{{route('admin.index')}}">Join Now</a></p>
	                        </div>
	                        <div class="items">
	                           <p>offer: tour 90% off  <a href="#">Join Now</a></p>
	                        </div>
	                        <div class="items">
	                           <p>offer: public tour 50% off  <a href="#">Join Now</a></p>
	                        </div>
	                     </div>
	                  </div>
	                  <!--Header center side version.1 ends-->
	                  <!--Header rights side version.1-->
	                  <div class="kf_element_right">
	                     <ul class="kf_meta">
	                        <li><span class="icon-people"></span><a href="{{route('auth.login')}}">Login</a></li>
	                        <li><a href="{{route('auth.register')}}">Register</a></li>
	                     </ul>
	                  </div>
	               </div>
	               <!--Header container version.1 ends-->
	            </div>
	            <!--Header top row version.1 ends-->
	            <div class="header-v1_navigation_row animated">
	               <div class="container">
	                  <div class="logo-here">
	                     <h1><a href="{{route('room.index')}}"><img src="{{url($publicUrl)}}/images/logo_v1.png" alt="44 by 150"></a></h1>
	                  </div>
	                  <div class="header-v1-nav txt-hvr3">
	                     <nav class="navigation">
	                        <ul>
	                           <li>
	                              <a href="{{route('room.index')}}">Home</a>
	                           </li>
	                           <li>
	                              <a href="{{route('room.tour')}}">Tour</a>
	                           </li>
	                           <li>
	                              <a href="">Pages</a>
	                              <ul class="sub-menu children">
	                                 <li><a href="{{route('room.about')}}">about us</a></li>
	                                 <li><a href="{{route('room.404')}}">404</a></li>
	                                 <li><a href="{{route('room.comming')}}">comming-soon</a></li>
	                              </ul>
	                           </li>
	                           <li><a href="{{route('room.shop')}}">Shop</a></li>
	                        </ul>
	                     </nav> 
	                     <div class="dl-menuwrapper">
	                        <button class="dl-trigger"></button>
	                        <ul class="dl-menu animated">
	                           <li class="menu-item">
	                              <a href="index-1.html">Home</a>
	                           </li>
	                           <li class="menu-item">
	                              <a href="destinations.html">destinations</a>
	                              <ul class="dl-submenu">
	                                 <li><a href="destinations.html">destinations</a></li>
	                                 <li><a href="destinations-02.html">destinations p2</a></li>
	                                 <li><a href="destinations-03.html">destinations p3</a></li>
	                                 <li><a href="destinations-04.html">destinations p4</a></li>
	                                 <li><a href="destinations-detail.html">destinations detail</a></li>
	                              </ul>
	                           </li>
	                           <li class="menu-item">
	                              <a href="tour-01.html">tour</a>
	                              <ul class="dl-submenu">
	                                 <li><a href="tour-01.html">tour</a></li>
	                                 <li><a href="tour-02.html">tour p2</a></li>
	                                 <li><a href="tour-sidebar.html">tour sidebar</a></li>
	                                 <li><a href="tour-sidebar-02.html">tour sidebar p2</a></li>
	                                 <li><a href="tour-sidebar-03.html">tour sidebar p3</a></li>
	                                 <li><a href="tour-detail.html">tour detail</a></li>
	                              </ul>
	                           </li>
	                           <li class="menu-item">
	                              <a href="blog.html">blog</a>
	                              <ul class="dl-submenu">
	                                 <li><a href="blog.html">blog</a></li>
	                                 <li><a href="blog-post.html">blog p2</a></li>
	                                 <li><a href="blog-post-02.html">blog p3</a></li>
	                                 <li><a href="blog-post-sidebar.html">blog sidebar</a></li>
	                                 <li><a href="blog-post-sidebar-2.html">blog sidebar p2</a></li>
	                                 <li><a href="blog-detail.html">blog detail</a></li>
	                              </ul>
	                           </li>
	                           <li><a href="hot-deals.html">Hot Deals</a></li>
	                           <li class="menu-item"><a href="team.html">team</a></li>
	                           <li class="menu-item">
	                              <a href="#">pages</a>
	                              <ul class="dl-submenu">
	                                 <li><a href="about-us.html">about us</a></li>
	                                 <li><a href="404.html">404</a></li>
	                                 <li><a href="comming-soon.html">comming-soon</a></li>
	                                 <li><a href="shop.html">Shop</a></li>
	                              </ul>
	                           </li>
	                           <li><a href="contact-us.html">Contact</a></li>
	                        </ul>
	                     </div>
	                  </div>
	                  <div class="header-v1-right">
                        <div class="pull-left">
                            <div class="search-01"><div class='control-search' tabindex='1'><a class="btn"><i class='fa fa-search'></i></a></div></div>
                          </div>
                            
                          <div class="kode">
	                        <div class="kf_side_menu_btn">
	                           <i class="fa fa-bars" aria-hidden="true"></i>
	                           <div class="kode__line"></div>
	                        </div>
	                        <!--side menu content-->	
                            <div class="kode-demo-3">
                               <svg class="kode-overlays" viewbox="0 0 100 100" preserveaspectratio="none">
                                  <path class="kode-overlays__path" d=""></path>
                                  <path class="kode-overlays__path" d=""></path>
                                  <path class="kode-overlays__path" d=""></path>
                               </svg>
                               <div class="kode-menu">
                                  <div class="kode-menu__wrap">
                                     <div class="group-01">
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="{{route('room.tour')}}">Tour</a>
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="{{route('room.about')}}">about us</a>
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="{{route('room.team')}}">Team</a>
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="{{route('room.blog')}}">Blogs</a>
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="{{route('room.shop')}}">Shop</a>
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="{{route('room.404')}}">404</a>
                                     </div>
                                  </div>
                                  <div class="close-btn">
                                     <div class="kode__line"><i class="fa fa-times" aria-hidden="true"></i></div>
                                  </div>
                               </div>
                               <!--side menu content ends-->
	                        </div>
	                     </div>
	                     <a href="#" class="btn-normal-1 effect2-color-1">Plan a trip</a>
	                  </div>
	               </div>
	            </div>
	         </header>
			<!--Header starts version.1 ends-->	