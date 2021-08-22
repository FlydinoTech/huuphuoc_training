<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/slicklab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Oct 2018 08:54:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek" />
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>SlickLab - Responsive Admin Dashboard Template</title>

    <!--easy pie chart-->
    <link href="/js/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />

    <!--vector maps -->
    <link rel="stylesheet" href="/js/vector-map/jquery-jvectormap-1.1.1.css">

    <!--right slidebar-->
    <link href="/css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--jquery-ui-->
    <link href="/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" />

    <!--iCheck-->
    <link href="/js/icheck/skins/all.css" rel="stylesheet">

    <link href="/css/owl.carousel.css" rel="stylesheet">


    <!--common style-->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">
    <link href="/css/admin/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">
    <div class="row">
        <div class="col-9">

        </div>
        <div class="col-3">
            <p>Xin chào, Huu Phuoc  <a href="">Logout</a></p>
        </div>
        
    </div>
    <div class="row">
        <!-- sidebar left start-->
        <div class="sidebar-left col-2">

            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="{{route('admin.index')}}">
                    <img src="/img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">

                    <li class="menu-list">
                        <ul class="child-list">
                            <li><a href=""> Quản lý danh mục</a></li>
                            <li><a href=""> Quản lý đơn hàng</a></li>
                            <li><a href=""> Quản lý người dùng</a></li>
                        </ul>
                    </li>
                </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- sidebar left end-->