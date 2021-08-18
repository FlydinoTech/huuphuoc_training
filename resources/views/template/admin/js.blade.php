<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{$adminUrl}}/js/jquery-1.10.2.min.js"></script>

<!--jquery-ui-->
<script src="{{$adminUrl}}/js/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

<script src="{{$adminUrl}}/js/jquery-migrate.js"></script>
<script src="{{$adminUrl}}/js/bootstrap.min.js"></script>
<script src="{{$adminUrl}}/js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="{{$adminUrl}}/js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="{{$adminUrl}}/js/slidebars.min.js"></script>

<!--switchery-->
<script src="{{$adminUrl}}/js/switchery/switchery.min.js"></script>
<script src="{{$adminUrl}}/js/switchery/switchery-init.js"></script>

<!--flot chart -->
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/flot-spline.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.resize.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.pie.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.selection.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.stack.js"></script>
<script src="{{$adminUrl}}/js/flot-chart/jquery.flot.crosshair.js"></script>


<!--earning chart init-->
<script src="{{$adminUrl}}/js/earning-chart-init.js"></script>


<!--Sparkline Chart-->
<script src="{{$adminUrl}}/js/sparkline/jquery.sparkline.js"></script>
<script src="{{$adminUrl}}/js/sparkline/sparkline-init.js"></script>

<!--easy pie chart-->
<script src="{{$adminUrl}}/js/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{$adminUrl}}/js/easy-pie-chart.js"></script>


<!--vectormap-->
<script src="{{$adminUrl}}/js/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{$adminUrl}}/js/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{$adminUrl}}/js/dashboard-vmap-init.js"></script>

<!--Icheck-->
<script src="{{$adminUrl}}/js/icheck/skins/icheck.min.js"></script>
<script src="{{$adminUrl}}/js/todo-init.js"></script>

<!--jquery countTo-->
<script src="{{$adminUrl}}/js/jquery-countTo/jquery.countTo.js"  type="text/javascript"></script>

<!--owl carousel-->
<script src="{{$adminUrl}}/js/owl.carousel.js"></script>


<!--common scripts for all pages-->

<script src="{{$adminUrl}}/js/scripts.js"></script>


<script type="text/javascript">

    $(document).ready(function() {

        //countTo

        $('.timer').countTo();

        //owl carousel

        $("#news-feed").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true
        });
    });

    $(window).on("resize",function(){
        var owl = $("#news-feed").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>

<!-- Mirrored from thevectorlab.net/slicklab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Oct 2018 08:54:42 GMT -->
</html>
