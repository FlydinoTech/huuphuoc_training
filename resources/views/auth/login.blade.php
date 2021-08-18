<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Login</title>
		<!-- Bootstrap -->
		<link href="{{ $publicUrl }}/css/bootstrap.min.css" rel="stylesheet">
		<!-- font awesome -->
		<link href="{{ $publicUrl }}/css/font-awesome.min.css" rel="stylesheet">
		<!-- animation -->
		<link href="{{ $publicUrl }}/css/animation.css" rel="stylesheet">
		<!-- selectric -->
		<link href="{{ $publicUrl }}/css/selectric.css" rel="stylesheet">
		<!-- slick Slider -->
		<link href="{{ $publicUrl }}/css/slick.css" rel="stylesheet">
		<!-- Responsive -->
      	<link href="{{ $publicUrl }}/js/responsive-menu\responsive.css" rel="stylesheet">
		<!-- SVG icons -->
		<link href="{{ $publicUrl }}/css/icons.css" rel="stylesheet">
		<!-- prettyphoto -->
		<link href="{{ $publicUrl }}/js/prettyphoto\prettyPhoto.css" rel="stylesheet">
		<!-- typography -->
		<link href="{{ $publicUrl }}/css/typography.css" rel="stylesheet">
		<!-- shortcodes -->
		<link href="{{ $publicUrl }}/css/shortcodes.css" rel="stylesheet">
		<!-- widget -->
		<link href="{{ $publicUrl }}/css/widget.css" rel="stylesheet">
		<!-- colors -->
		<link href="{{ $publicUrl }}/css/colors.css" rel="stylesheet">
		<!-- Style sheet -->
		<link href="{{ $publicUrl }}/style.css" rel="stylesheet">
		<!-- Mobile responsive -->
      	<link href="{{ $publicUrl }}/css/responsive.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
	</head>
	<body class="background-log">
		<div class="pre-loader">
			<div class="pre-loader-img"></div>
		</div>
		<div class="wrapper">

			<section>
				<div class="container">
					<div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-03">
                                <form>
                                    <div class="login-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="travel-login ">
                                                    <a href="{{ route('room.index') }}"><h4 class="title-01">Login</h4></a>
                                                    <h5 class="title-anchor">Not a member yet? <a href="{{ route('auth.register') }}">Sign up!</a></h5>
                                                    <div class="text-felid label-effect margin-bottom-30">
                                                        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                                        <div class="kf_felids">
                                                            <input class="ipd" type="text" data-new-placeholder="Username or E-mail" placeholder="Username or E-mail">
                                                        </div>
                                                    </div>
                                                    <div class="text-felid label-effect margin-bottom-30">
                                                        <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                                        <div class="kf_felids">
                                                            <input class="ipd" type="email" data-new-placeholder="Your Email" placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-02 margin-bottom-30">
                                                        <input id="check1" type="checkbox">
                                                        <label for="check1">Rember me</label>
                                                        <a href="" class="forget-pass">Forgot Password?</a>
                                                    </div>
                                                    <div class="form-btn">
                                                        <button class="submit-btn" type="submit">Login</button>
                                                    </div>
                                                    <div class="form-btn"><span>or</span></div>
                                                    <div class="form-share-links">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="facebook">
                                                                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="google-plus">
                                                                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
			</section>
			
		</div>
		<!-- jQuery -->
		<script src="{{ $publicUrl }}/js/jquery.js"></script>
		<script src="{{ $publicUrl }}/js/modernizr.custom.js"></script>
		<!-- bootstrap -->
		<script src="{{ $publicUrl }}/js/bootstrap.min.js"></script>
		<!-- selectric -->
		<script src="{{ $publicUrl }}/js/selectric.js"></script>
		<!-- demo -->
		<script src="{{ $publicUrl }}/js/effects\demo.js"></script>
		<!-- demo1 -->
		<script src="{{ $publicUrl }}/js/effects\demo3.js"></script>
		<!-- easing -->
		<script src="{{ $publicUrl }}/js/effects\easings.js"></script>
		<!-- slick -->
		<script src="{{ $publicUrl }}/js/slick.js"></script>
		<!-- scrolling-nav -->
		<script src="{{ $publicUrl }}/js/scrolling-nav.js"></script>
		<!-- jquery.ripples-min -->
		<script src="{{ $publicUrl }}/js/jquery.ripples-min.js"></script>
		<!-- prettyphoto -->
		<script src="{{ $publicUrl }}/js/prettyphoto\prettyphoto.js"></script>
		<!-- Responsive SCRIPTS -->
      	<script src="{{ $publicUrl }}/js/responsive-menu\responsive.jquery.js"></script>
		<!-- custom -->
		<script src="{{ $publicUrl }}/js/custom.js"></script>
	</body>
</html>

