

<!DOCTYPE html>
<!-- 
Template Name: Wlog - Blog and Magazine HTML template 
Version: 1.0.0
Author: Kamleshyadav
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Wlog - Blog and Magazine HTML template </title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Blog">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/icofont.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


	<link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}"> --}}
	{{-- <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script> --}}
	<script src="{{ asset('https://kit.fontawesome.com/633b634a78.js') }}" crossorigin="anonymous"></script>

    <!--Start Style -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}"> --}}
    <script src="{{ asset('https://kit.fontawesome.com/633b634a78.js') }}" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/blog/swiper/swiper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/blog/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/blog/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>
<body class="homepage2 single_with_sidebar">
{{-- @include('layouts.frontend.partials.header') --}}
<div class="blog_main_wrapper">
	
	<div class="blog_right_toggle_sidebar">
		<div class="outer_close"></div>
		<div class="blog_togglediv">
			<a href="javascript:;" class="toggle_close"></a>
			<div class="blog_sidebar">
				<div class="widget widget_social">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_pink">CONNECT</h3>
						</div>
					</div>
					<ul>
						<li>
							<div class="widget_social_link">
								<i class="fa fa-facebook"></i>
								<h2>62.5K</h2>
								<p>Followers</p>
							</div>
						</li>
						<li>
							<div class="widget_social_link">
								<i class="fa fa-twitter"></i>
								<h2>62K</h2>
								<p>Followers</p>
							</div>
						</li>
						<li>
							<div class="widget_social_link">
								<i class="fa fa-youtube-play"></i>
								<h2>45K</h2>
								<p>Followers</p>
							</div>
						</li>
						<li>
							<div class="widget_social_link">
								<i class="fa fa-instagram"></i>
								<h2>62.5K</h2>
								<p>Followers</p>
							</div>
						</li>
						<li>
							<div class="widget_social_link">
								<i class="fa fa-pinterest-p"></i>
								<h2>62K</h2>
								<p>Followers</p>
							</div>
						</li>
						<li>
							<div class="widget_social_link">
								<i class="fa fa-rss"></i>
								<h2>45K</h2>
								<p>Followers</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="widget widget_recent_post">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_orange">What’s hot</h3>
						</div>
					</div>
					<ul>
						<li>
							<div class="blog_recent_post">
								<div class="blog_recent_post_img">
									<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
								</div>
								<div class="blog_recent_post_content">
									<h4><a href="blog_single_fullwidth.html">Does US Tax Overhaul Violate Global Trade.</a></h4>
									<p>Sep 21,2018 <a href="#">- Sports</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="blog_recent_post">
								<div class="blog_recent_post_img">
									<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
								</div>
								<div class="blog_recent_post_content">
									<h4><a href="blog_single_fullwidth.html">What should you take in your bag before going.</a></h4>
									<p>Sep 21,2018 <a href="#">- Sports</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="blog_recent_post">
								<div class="blog_recent_post_img">
									<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
								</div>
								<div class="blog_recent_post_content">
									<h4><a href="blog_single_fullwidth.html">Take in your bag before going to hiking</a></h4>
									<p>Sep 21,2018 <a href="#">- Sports</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="blog_recent_post">
								<div class="blog_recent_post_img">
									<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
								</div>
								<div class="blog_recent_post_content">
									<h4><a href="blog_single_fullwidth.html">Your bag before going to parti hiking</a></h4>
									<p>Sep 21,2018 <a href="#">- Sports</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="widget widget_recent_news">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_lightblue">Recent News</h3>
						</div>
					</div>
					<ul>
						<li>
							<div class="blog_news">
								<div class="blog_news_title">
									<h4><a href="blog_single_fullwidth.html">LA Marathon is long distance running from the stadium.</a></h4>
									<p>Sep 21,2018 <a href="#">- Sports</a></p>
								</div>
								<div class="blog_news_action">
									<span><i class="fa fa-ellipsis-v"></i></span>
								</div>
								<ul class="more_option">
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 350 350"><path fill="rgb(112, 112, 112)" d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587 C104.535,132.855,136.084,171.173,175,171.173z"/> <path fill="rgb(112, 112, 112)" d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/> <path fill="rgb(112, 112, 112)" d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/> <path fill="rgb(112, 112, 112)" d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761 s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131 c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496 c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"/>
									</svg>Profile</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"><path fill-rule="evenodd" fill="rgb(112, 112, 112)" d="M13.487,4.224 L12.869,4.844 L9.156,1.131 L9.775,0.512 C10.458,-0.171 11.567,-0.171 12.250,0.512 L13.487,1.750 C14.170,2.433 14.170,3.541 13.487,4.224 ZM4.825,11.649 C4.654,11.820 4.654,12.097 4.825,12.267 C4.996,12.439 5.273,12.439 5.444,12.267 L12.250,5.462 L11.631,4.843 L4.825,11.649 ZM1.731,8.555 C1.560,8.726 1.560,9.003 1.731,9.174 C1.902,9.345 2.179,9.345 2.350,9.174 L9.156,2.368 L8.538,1.750 L1.731,8.555 ZM9.774,2.987 L2.968,9.793 C2.626,10.134 2.627,10.688 2.968,11.030 C3.310,11.372 3.864,11.373 4.206,11.029 L11.012,4.224 L9.774,2.987 ZM4.205,12.884 C3.995,12.675 3.894,12.409 3.857,12.136 C3.768,12.150 3.678,12.162 3.587,12.162 C3.119,12.162 2.680,11.980 2.350,11.649 C2.019,11.317 1.837,10.879 1.837,10.411 C1.837,10.326 1.850,10.243 1.862,10.160 C1.579,10.122 1.317,9.998 1.112,9.793 C1.093,9.773 1.086,9.746 1.068,9.725 L-0.000,14.000 L4.263,12.932 C4.244,12.915 4.223,12.902 4.205,12.884 Z"></path></svg>Edit</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 511.626 511.627"> <path fill="rgb(112, 112, 112)" d="M506.206,179.012L360.025,32.834c-3.617-3.617-7.898-5.426-12.847-5.426s-9.233,1.809-12.847,5.426 c-3.617,3.619-5.428,7.902-5.428,12.85v73.089h-63.953c-135.716,0-218.984,38.354-249.823,115.06C5.042,259.335,0,291.03,0,328.907 c0,31.594,12.087,74.514,36.259,128.762c0.57,1.335,1.566,3.614,2.996,6.849c1.429,3.233,2.712,6.088,3.854,8.565 c1.146,2.471,2.384,4.565,3.715,6.276c2.282,3.237,4.948,4.859,7.994,4.859c2.855,0,5.092-0.951,6.711-2.854 c1.615-1.902,2.424-4.284,2.424-7.132c0-1.718-0.238-4.236-0.715-7.569c-0.476-3.333-0.715-5.564-0.715-6.708 c-0.953-12.938-1.429-24.653-1.429-35.114c0-19.223,1.668-36.449,4.996-51.675c3.333-15.229,7.948-28.407,13.85-39.543 c5.901-11.14,13.512-20.745,22.841-28.835c9.325-8.09,19.364-14.702,30.118-19.842c10.756-5.141,23.413-9.186,37.974-12.135 c14.56-2.95,29.215-4.997,43.968-6.14s31.455-1.711,50.109-1.711h63.953v73.091c0,4.948,1.807,9.232,5.421,12.847 c3.62,3.613,7.901,5.424,12.847,5.424c4.948,0,9.232-1.811,12.854-5.424l146.178-146.183c3.617-3.617,5.424-7.898,5.424-12.847 C511.626,186.92,509.82,182.636,506.206,179.012z"/>
										</svg>Share</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="blog_news">
								<div class="blog_news_title">
									<h4><a href="blog_single_fullwidth.html">LA Marathon is long distance running from the stadium.</a></h4>
									<p>Sep 21,2018 <a href="#">- Sports</a></p>
								</div>
								<div class="blog_news_action">
									<span><i class="fa fa-ellipsis-v"></i></span>
								</div>
								<ul class="more_option">
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 350 350"><path fill="rgb(112, 112, 112)" d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587 C104.535,132.855,136.084,171.173,175,171.173z"/> <path fill="rgb(112, 112, 112)" d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/> <path fill="rgb(112, 112, 112)" d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/> <path fill="rgb(112, 112, 112)" d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761 s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131 c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496 c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"/>
									</svg>Profile</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"><path fill-rule="evenodd" fill="rgb(112, 112, 112)" d="M13.487,4.224 L12.869,4.844 L9.156,1.131 L9.775,0.512 C10.458,-0.171 11.567,-0.171 12.250,0.512 L13.487,1.750 C14.170,2.433 14.170,3.541 13.487,4.224 ZM4.825,11.649 C4.654,11.820 4.654,12.097 4.825,12.267 C4.996,12.439 5.273,12.439 5.444,12.267 L12.250,5.462 L11.631,4.843 L4.825,11.649 ZM1.731,8.555 C1.560,8.726 1.560,9.003 1.731,9.174 C1.902,9.345 2.179,9.345 2.350,9.174 L9.156,2.368 L8.538,1.750 L1.731,8.555 ZM9.774,2.987 L2.968,9.793 C2.626,10.134 2.627,10.688 2.968,11.030 C3.310,11.372 3.864,11.373 4.206,11.029 L11.012,4.224 L9.774,2.987 ZM4.205,12.884 C3.995,12.675 3.894,12.409 3.857,12.136 C3.768,12.150 3.678,12.162 3.587,12.162 C3.119,12.162 2.680,11.980 2.350,11.649 C2.019,11.317 1.837,10.879 1.837,10.411 C1.837,10.326 1.850,10.243 1.862,10.160 C1.579,10.122 1.317,9.998 1.112,9.793 C1.093,9.773 1.086,9.746 1.068,9.725 L-0.000,14.000 L4.263,12.932 C4.244,12.915 4.223,12.902 4.205,12.884 Z"></path></svg>Edit</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 511.626 511.627"> <path fill="rgb(112, 112, 112)" d="M506.206,179.012L360.025,32.834c-3.617-3.617-7.898-5.426-12.847-5.426s-9.233,1.809-12.847,5.426 c-3.617,3.619-5.428,7.902-5.428,12.85v73.089h-63.953c-135.716,0-218.984,38.354-249.823,115.06C5.042,259.335,0,291.03,0,328.907 c0,31.594,12.087,74.514,36.259,128.762c0.57,1.335,1.566,3.614,2.996,6.849c1.429,3.233,2.712,6.088,3.854,8.565 c1.146,2.471,2.384,4.565,3.715,6.276c2.282,3.237,4.948,4.859,7.994,4.859c2.855,0,5.092-0.951,6.711-2.854 c1.615-1.902,2.424-4.284,2.424-7.132c0-1.718-0.238-4.236-0.715-7.569c-0.476-3.333-0.715-5.564-0.715-6.708 c-0.953-12.938-1.429-24.653-1.429-35.114c0-19.223,1.668-36.449,4.996-51.675c3.333-15.229,7.948-28.407,13.85-39.543 c5.901-11.14,13.512-20.745,22.841-28.835c9.325-8.09,19.364-14.702,30.118-19.842c10.756-5.141,23.413-9.186,37.974-12.135 c14.56-2.95,29.215-4.997,43.968-6.14s31.455-1.711,50.109-1.711h63.953v73.091c0,4.948,1.807,9.232,5.421,12.847 c3.62,3.613,7.901,5.424,12.847,5.424c4.948,0,9.232-1.811,12.854-5.424l146.178-146.183c3.617-3.617,5.424-7.898,5.424-12.847 C511.626,186.92,509.82,182.636,506.206,179.012z"/>
										</svg>Share</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="widget widget_instagram_news">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_pink">Instagram</h3>
						</div>
					</div>
					<ul>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
						<li>
							<a href="#"><img src="https://via.placeholder.com/75x75" class=
							"img-fluid" alt=""></a>
							<div class="blog_overlay"></div>
							<div class="blog_overlay_btndiv"><a href="images/placehold.jpg" class="fa fa-search blog_popup"></a></div>
						</li>
					</ul>
				</div>
				<div class="widget widget_categories">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_lightgreen">categories</h3>
						</div>
					</div>
					<ul>
						<li><a href="#">Beauty <span>(02)</span></a></li>
						<li><a href="#">Fashion <span>(45)</span></a></li>
						<li><a href="#">Lifestyle <span>(124)</span></a></li>
						<li><a href="#">Makeup  <span>(75)</span></a></li>
						<li><a href="#">Others   <span>(1,242)</span></a></li>
						<li><a href="#">Travel  <span>(186)</span></a></li>
					</ul>
				</div>
				<div class="widget widget_special_post">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_pink">don't miss</h3>
						</div>
					</div>
					<ul>
						<li>
							<div class="blog_post_slider_wrapper"> 
								<a href="blog_single_with_sidebar.html" class="blog_post_slider_img"> 
									<img src="https://via.placeholder.com/240x220" class="img-fluid" alt=""> 
								</a> 
								<div class="blog_post_slider_content"> 
									<h2><a href="#">How FC is The Best Team in The League</a></h2>
									<ul class="blog_meta_tags">
										<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"></path></svg> 21K</span></li> 
										<li><span class="blog_bg_pink"><svg xmlns="http://www.w3.org/2000/svg" width="13px" height="10px"><path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M12.485,7.049 C12.142,7.544 11.670,7.962 11.070,8.303 C11.119,8.417 11.168,8.520 11.219,8.615 C11.270,8.710 11.330,8.801 11.401,8.889 C11.471,8.977 11.525,9.045 11.564,9.095 C11.603,9.145 11.665,9.214 11.752,9.305 C11.840,9.394 11.895,9.453 11.919,9.482 C11.924,9.487 11.934,9.497 11.948,9.514 C11.963,9.530 11.974,9.542 11.981,9.549 C11.988,9.556 11.998,9.568 12.010,9.585 C12.022,9.602 12.030,9.614 12.035,9.624 L12.053,9.659 C12.053,9.659 12.058,9.673 12.068,9.702 C12.077,9.730 12.078,9.745 12.071,9.748 C12.064,9.750 12.062,9.766 12.064,9.794 C12.050,9.860 12.018,9.912 11.970,9.950 C11.921,9.988 11.868,10.005 11.810,10.000 C11.568,9.967 11.360,9.929 11.186,9.887 C10.441,9.697 9.769,9.394 9.169,8.977 C8.734,9.053 8.309,9.091 7.893,9.091 C6.582,9.091 5.441,8.778 4.469,8.153 C4.749,8.172 4.962,8.182 5.107,8.182 C5.886,8.182 6.633,8.075 7.349,7.862 C8.064,7.649 8.703,7.343 9.264,6.946 C9.868,6.510 10.333,6.008 10.657,5.440 C10.981,4.872 11.143,4.271 11.143,3.637 C11.143,3.272 11.087,2.912 10.976,2.557 C11.600,2.893 12.093,3.315 12.456,3.821 C12.818,4.328 13.000,4.872 13.000,5.455 C13.000,6.023 12.828,6.554 12.485,7.049 ZM7.672,6.787 C6.886,7.111 6.031,7.273 5.107,7.272 C4.691,7.272 4.266,7.235 3.830,7.159 C3.231,7.575 2.558,7.879 1.814,8.068 C1.640,8.111 1.432,8.148 1.190,8.182 L1.168,8.182 C1.115,8.182 1.065,8.163 1.019,8.125 C0.973,8.087 0.946,8.037 0.936,7.976 C0.931,7.962 0.929,7.946 0.929,7.930 C0.929,7.914 0.930,7.898 0.932,7.884 C0.935,7.869 0.939,7.855 0.947,7.841 L0.965,7.805 C0.965,7.805 0.973,7.792 0.990,7.767 C1.007,7.740 1.017,7.729 1.019,7.731 C1.022,7.734 1.033,7.722 1.052,7.696 C1.071,7.670 1.081,7.659 1.081,7.664 C1.105,7.636 1.161,7.577 1.248,7.486 C1.335,7.396 1.398,7.326 1.436,7.277 C1.475,7.227 1.530,7.158 1.600,7.071 C1.670,6.983 1.730,6.892 1.781,6.797 C1.832,6.703 1.881,6.598 1.930,6.485 C1.330,6.144 0.859,5.725 0.515,5.228 C0.172,4.731 0.000,4.200 0.000,3.637 C0.000,2.978 0.227,2.370 0.682,1.812 C1.137,1.253 1.757,0.812 2.543,0.487 C3.329,0.163 4.183,0.000 5.107,0.000 C6.031,0.000 6.886,0.162 7.672,0.487 C8.458,0.812 9.078,1.253 9.532,1.812 C9.987,2.370 10.214,2.978 10.214,3.637 C10.214,4.295 9.987,4.903 9.532,5.462 C9.078,6.020 8.458,6.462 7.672,6.787 ZM8.716,2.280 C8.337,1.859 7.825,1.525 7.182,1.279 C6.539,1.033 5.847,0.910 5.107,0.910 C4.367,0.910 3.676,1.033 3.032,1.279 C2.389,1.525 1.878,1.859 1.498,2.280 C1.119,2.702 0.929,3.154 0.929,3.637 C0.929,4.025 1.057,4.399 1.313,4.759 C1.569,5.119 1.930,5.431 2.394,5.697 L3.098,6.094 L2.844,6.691 C3.008,6.596 3.158,6.503 3.294,6.414 L3.613,6.194 L3.997,6.264 C4.375,6.331 4.745,6.364 5.107,6.364 C5.847,6.364 6.539,6.240 7.182,5.994 C7.825,5.748 8.337,5.415 8.716,4.993 C9.096,4.572 9.286,4.120 9.286,3.637 C9.286,3.154 9.096,2.702 8.716,2.280 Z"></path></svg>12</span></li> 
									</ul> 
								</div> 
							</div>
						</li>
						<li>
							<div class="blog_post_slider_wrapper"> 
								<a href="blog_single_with_sidebar.html" class="blog_post_slider_img"> 
									<img src="https://via.placeholder.com/240x220" class="img-fluid" alt=""> 
								</a> 
								<div class="blog_post_slider_content"> 
									<h2><a href="#">How FC is The Best Team in The League</a></h2>
									<ul class="blog_meta_tags">
										<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"></path></svg> 21K</span></li> 
										<li><span class="blog_bg_pink"><svg xmlns="http://www.w3.org/2000/svg" width="13px" height="10px"><path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M12.485,7.049 C12.142,7.544 11.670,7.962 11.070,8.303 C11.119,8.417 11.168,8.520 11.219,8.615 C11.270,8.710 11.330,8.801 11.401,8.889 C11.471,8.977 11.525,9.045 11.564,9.095 C11.603,9.145 11.665,9.214 11.752,9.305 C11.840,9.394 11.895,9.453 11.919,9.482 C11.924,9.487 11.934,9.497 11.948,9.514 C11.963,9.530 11.974,9.542 11.981,9.549 C11.988,9.556 11.998,9.568 12.010,9.585 C12.022,9.602 12.030,9.614 12.035,9.624 L12.053,9.659 C12.053,9.659 12.058,9.673 12.068,9.702 C12.077,9.730 12.078,9.745 12.071,9.748 C12.064,9.750 12.062,9.766 12.064,9.794 C12.050,9.860 12.018,9.912 11.970,9.950 C11.921,9.988 11.868,10.005 11.810,10.000 C11.568,9.967 11.360,9.929 11.186,9.887 C10.441,9.697 9.769,9.394 9.169,8.977 C8.734,9.053 8.309,9.091 7.893,9.091 C6.582,9.091 5.441,8.778 4.469,8.153 C4.749,8.172 4.962,8.182 5.107,8.182 C5.886,8.182 6.633,8.075 7.349,7.862 C8.064,7.649 8.703,7.343 9.264,6.946 C9.868,6.510 10.333,6.008 10.657,5.440 C10.981,4.872 11.143,4.271 11.143,3.637 C11.143,3.272 11.087,2.912 10.976,2.557 C11.600,2.893 12.093,3.315 12.456,3.821 C12.818,4.328 13.000,4.872 13.000,5.455 C13.000,6.023 12.828,6.554 12.485,7.049 ZM7.672,6.787 C6.886,7.111 6.031,7.273 5.107,7.272 C4.691,7.272 4.266,7.235 3.830,7.159 C3.231,7.575 2.558,7.879 1.814,8.068 C1.640,8.111 1.432,8.148 1.190,8.182 L1.168,8.182 C1.115,8.182 1.065,8.163 1.019,8.125 C0.973,8.087 0.946,8.037 0.936,7.976 C0.931,7.962 0.929,7.946 0.929,7.930 C0.929,7.914 0.930,7.898 0.932,7.884 C0.935,7.869 0.939,7.855 0.947,7.841 L0.965,7.805 C0.965,7.805 0.973,7.792 0.990,7.767 C1.007,7.740 1.017,7.729 1.019,7.731 C1.022,7.734 1.033,7.722 1.052,7.696 C1.071,7.670 1.081,7.659 1.081,7.664 C1.105,7.636 1.161,7.577 1.248,7.486 C1.335,7.396 1.398,7.326 1.436,7.277 C1.475,7.227 1.530,7.158 1.600,7.071 C1.670,6.983 1.730,6.892 1.781,6.797 C1.832,6.703 1.881,6.598 1.930,6.485 C1.330,6.144 0.859,5.725 0.515,5.228 C0.172,4.731 0.000,4.200 0.000,3.637 C0.000,2.978 0.227,2.370 0.682,1.812 C1.137,1.253 1.757,0.812 2.543,0.487 C3.329,0.163 4.183,0.000 5.107,0.000 C6.031,0.000 6.886,0.162 7.672,0.487 C8.458,0.812 9.078,1.253 9.532,1.812 C9.987,2.370 10.214,2.978 10.214,3.637 C10.214,4.295 9.987,4.903 9.532,5.462 C9.078,6.020 8.458,6.462 7.672,6.787 ZM8.716,2.280 C8.337,1.859 7.825,1.525 7.182,1.279 C6.539,1.033 5.847,0.910 5.107,0.910 C4.367,0.910 3.676,1.033 3.032,1.279 C2.389,1.525 1.878,1.859 1.498,2.280 C1.119,2.702 0.929,3.154 0.929,3.637 C0.929,4.025 1.057,4.399 1.313,4.759 C1.569,5.119 1.930,5.431 2.394,5.697 L3.098,6.094 L2.844,6.691 C3.008,6.596 3.158,6.503 3.294,6.414 L3.613,6.194 L3.997,6.264 C4.375,6.331 4.745,6.364 5.107,6.364 C5.847,6.364 6.539,6.240 7.182,5.994 C7.825,5.748 8.337,5.415 8.716,4.993 C9.096,4.572 9.286,4.120 9.286,3.637 C9.286,3.154 9.096,2.702 8.716,2.280 Z"></path></svg>12</span></li> 
									</ul> 
								</div> 
							</div>
						</li>
					</ul>
				</div>
				<div class="widget widget_archive">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_blue">Archives</h3>
						</div>
					</div>
					<ul>
						<li>
							<a href="#">August 2017 <span>(02)</span></a>
						</li>
						<li>
							<a href="#">September 2017 <span>(45)</span></a>
						</li>
						<li>
							<a href="#">October 2017 <span>(125)</span></a>
						</li>
						<li>
							<a href="#">November 2017 <span>(75)</span></a>
						</li>
						<li>
							<a href="#">December 2017 <span>(10)</span></a>
						</li>
						<li>
							<a href="#">January  2018 <span>(186)</span></a>
						</li>
						<li>
							<a href="#">February  2018 <span>(02)</span></a>
						</li>
					</ul>
				</div>
				<div class="widget widget_newsletter">
					<div class="blog_main_heading_div">
						<div class="blog_heading_div">
							<h3 class="blog_bg_pink">Subscribe</h3>
						</div>
					</div>
					<div class="blog_newsletter">
						<p>Enter Your Email To Get Notified.</p>
						<form class="form-inline">
							<div class="blog_form_group">
								<input type="text" class="form-control" placeholder=" Email Here...">
							</div>
							<button type="button" class="blog_newsletter_btn"><svg xmlns="http://www.w3.org/2000/svg" width="17px" height="16px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M16.914,0.038 C16.838,-0.030 16.731,-0.046 16.639,-0.002 L0.147,7.802 C0.058,7.844 0.001,7.934 0.000,8.034 C-0.001,8.134 0.054,8.225 0.142,8.269 L4.810,10.602 C4.895,10.645 4.997,10.635 5.074,10.577 L9.611,7.123 L6.049,10.855 C5.998,10.908 5.972,10.981 5.978,11.055 L6.333,15.760 C6.340,15.864 6.409,15.953 6.507,15.986 C6.533,15.994 6.560,15.999 6.586,15.999 C6.659,15.999 6.729,15.967 6.778,15.909 L9.256,12.986 L12.318,14.476 C12.384,14.508 12.461,14.509 12.529,14.480 C12.597,14.449 12.648,14.391 12.670,14.320 L16.989,0.310 C17.019,0.212 16.990,0.105 16.914,0.038 Z"/></svg></button>
						</form>
					</div>
				</div>
				<div class="ads_widget">
					<a href="#"><img src="https://via.placeholder.com/280x350?text=Ads%20Area" class="img-fluid" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<div class="">
		<div class="">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="">
						@include('layouts.frontend.partials.header')
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog_main_wrapper blog_toppadder60 blog_bottompadder60">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="blog_post_style2 blog_single_div">
						<div class="blog_post_style2_img wow fadeInUp">
							<img src="https://via.placeholder.com/870x500/ffc0cb" class="img-fluid" alt="">
						</div>
						<div class="blog_post_style2_content wow fadeInUp">
							<h3>Office Volunteers Needed To Answer And Help With Office Duties</h3>
							<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
							<ul class="blog_meta_tags">
								<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> 21K</span></li> 
								<li><span class="blog_bg_pink"><svg xmlns="http://www.w3.org/2000/svg" width="13px" height="10px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M12.485,7.049 C12.142,7.544 11.670,7.962 11.070,8.303 C11.119,8.417 11.168,8.520 11.219,8.615 C11.270,8.710 11.330,8.801 11.401,8.889 C11.471,8.977 11.525,9.045 11.564,9.095 C11.603,9.145 11.665,9.214 11.752,9.305 C11.840,9.394 11.895,9.453 11.919,9.482 C11.924,9.487 11.934,9.497 11.948,9.514 C11.963,9.530 11.974,9.542 11.981,9.549 C11.988,9.556 11.998,9.568 12.010,9.585 C12.022,9.602 12.030,9.614 12.035,9.624 L12.053,9.659 C12.053,9.659 12.058,9.673 12.068,9.702 C12.077,9.730 12.078,9.745 12.071,9.748 C12.064,9.750 12.062,9.766 12.064,9.794 C12.050,9.860 12.018,9.912 11.970,9.950 C11.921,9.988 11.868,10.005 11.810,10.000 C11.568,9.967 11.360,9.929 11.186,9.887 C10.441,9.697 9.769,9.394 9.169,8.977 C8.734,9.053 8.309,9.091 7.893,9.091 C6.582,9.091 5.441,8.778 4.469,8.153 C4.749,8.172 4.962,8.182 5.107,8.182 C5.886,8.182 6.633,8.075 7.349,7.862 C8.064,7.649 8.703,7.343 9.264,6.946 C9.868,6.510 10.333,6.008 10.657,5.440 C10.981,4.872 11.143,4.271 11.143,3.637 C11.143,3.272 11.087,2.912 10.976,2.557 C11.600,2.893 12.093,3.315 12.456,3.821 C12.818,4.328 13.000,4.872 13.000,5.455 C13.000,6.023 12.828,6.554 12.485,7.049 ZM7.672,6.787 C6.886,7.111 6.031,7.273 5.107,7.272 C4.691,7.272 4.266,7.235 3.830,7.159 C3.231,7.575 2.558,7.879 1.814,8.068 C1.640,8.111 1.432,8.148 1.190,8.182 L1.168,8.182 C1.115,8.182 1.065,8.163 1.019,8.125 C0.973,8.087 0.946,8.037 0.936,7.976 C0.931,7.962 0.929,7.946 0.929,7.930 C0.929,7.914 0.930,7.898 0.932,7.884 C0.935,7.869 0.939,7.855 0.947,7.841 L0.965,7.805 C0.965,7.805 0.973,7.792 0.990,7.767 C1.007,7.740 1.017,7.729 1.019,7.731 C1.022,7.734 1.033,7.722 1.052,7.696 C1.071,7.670 1.081,7.659 1.081,7.664 C1.105,7.636 1.161,7.577 1.248,7.486 C1.335,7.396 1.398,7.326 1.436,7.277 C1.475,7.227 1.530,7.158 1.600,7.071 C1.670,6.983 1.730,6.892 1.781,6.797 C1.832,6.703 1.881,6.598 1.930,6.485 C1.330,6.144 0.859,5.725 0.515,5.228 C0.172,4.731 0.000,4.200 0.000,3.637 C0.000,2.978 0.227,2.370 0.682,1.812 C1.137,1.253 1.757,0.812 2.543,0.487 C3.329,0.163 4.183,0.000 5.107,0.000 C6.031,0.000 6.886,0.162 7.672,0.487 C8.458,0.812 9.078,1.253 9.532,1.812 C9.987,2.370 10.214,2.978 10.214,3.637 C10.214,4.295 9.987,4.903 9.532,5.462 C9.078,6.020 8.458,6.462 7.672,6.787 ZM8.716,2.280 C8.337,1.859 7.825,1.525 7.182,1.279 C6.539,1.033 5.847,0.910 5.107,0.910 C4.367,0.910 3.676,1.033 3.032,1.279 C2.389,1.525 1.878,1.859 1.498,2.280 C1.119,2.702 0.929,3.154 0.929,3.637 C0.929,4.025 1.057,4.399 1.313,4.759 C1.569,5.119 1.930,5.431 2.394,5.697 L3.098,6.094 L2.844,6.691 C3.008,6.596 3.158,6.503 3.294,6.414 L3.613,6.194 L3.997,6.264 C4.375,6.331 4.745,6.364 5.107,6.364 C5.847,6.364 6.539,6.240 7.182,5.994 C7.825,5.748 8.337,5.415 8.716,4.993 C9.096,4.572 9.286,4.120 9.286,3.637 C9.286,3.154 9.096,2.702 8.716,2.280 Z"/></svg>12</span></li> 
							</ul> 
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  iolore miagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqeuipi ex ieiaiommdo consequatuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore reeu fugiaetit nullaiatuir Excepteur sint occaeciat cupidatat non proident, sunt in culpa ueriunt moillit anim id est laborumispiciatis unde onis iste natus errorlaudantium, totam rem aperiam.</p>
							<p>eaque ipsa quae ab illoinventore veritatis et quasi architecto beatae vitae dicta su explicabo. emo m ipsam voluptatem quia voluptas sit iernatur aut odit aut fugit, sed quia consequetur magni ilorei eos quiluptatem sequi nesciunt. Neque porro uam est, qui dolorem ipsum quia doi situri adipisci velit, sed quia nonmquam eius modi tempora incidunt ut labore et dolorenameliquam quaerat voluptatem Neque porro uam est qui dolorem ipsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris inisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillumre eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
							<h4>Morbi in fermentum mi, sed egestas turpis.</h4>
							<ul>
								<li>Pellentesque dolor leo, faucibus non massa sit amet, luctus semper sapien.</li>
								<li>Vivamus nisl lorem, scelerisque et feugiat at, egestas ut mi.</li>
								<li>Quisque lacinia neque ut sem varius, id cursus velit tincidunt.</li>
								<li>Maecenas id augue lorem. Cras porta lectus mauris, in suscipit nulla posuere aliquam.</li>
								<li>Curabitur efficitur condimentum lectus, a vestibulum eros imperdiet vitae.</li>
								<li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Cura; Nulla id molestie dui.</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  iolore miagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqeuipi ex ieiaiommdo consequatuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore reeu fugiaetit nullaiatuir Excepteur sint occaeciat cupidatat non proident, sunt in culpa ueriunt moillit anim id est laborumispiciatis unde onis iste natus errorlaudantium, totam rem aperiam.</p>
							<blockquote>
								<div class="blog_testimonial_img">
									<img src="https://via.placeholder.com/120x140/ffc0cb" class="img-fluid" alt="">
								</div>
								<div class="blog_testimonial_data">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuod tempioir incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamei quis nostrud exercitation ullamco laboris nisi ut consequat.</p>
									<h3>Vella Doe <span>- Designer</span></h3>
								</div>
							</blockquote>
							<p>Eaque ipsa quae ab illoinventore veritatis et quasi architecto beatae vitae dicta su explicabo. emo m ipsam voluptatem quia voluptas sit iernatur aut odit aut fugit, sed quia consequetur magni ilorei eos quiluptatem sequi nesciunt. Neque porro uam est, qui dolorem ipsum quia doi situri adipisci velit, sed quia nonmquam eius modi tempora incidunt ut labore et dolorenameliquam quaerat voluptatem Neque porro uam est qui dolorem ipsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris inisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillumre eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
						</div>
					</div>
					<div class="blog_author_div wow fadeInUp">
						<div class="blog_author_img">
							<img src="https://via.placeholder.com/122x122" class="img-fluid" alt="">
						</div>
						<div class="blog_author_content">
							<h3>About the Author</h3>
							<h4>John Doe <span> - Designer</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et irmagnUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatDuis ee dolor in reprehenderit.</p>
						</div>
					</div>
					<div class="blog_comment_div">
						<h3 class="wow fadeInUp">Comments <span>(4)</span></h3>
						<ol class="comment-list">
							<li class="wow fadeInUp">
								
								<ul class="children">
									<li>
										<div class="blog_comment">
											<div class="blog_comment_img">
												<img src="https://via.placeholder.com/70x70" class="img-fluid" alt="">
											</div>
											<div class="blog_comment_data">
												<h3>John Doe <span>- 29 july 2018</span></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusd tempor incidiunt utorekse eet dolore magna aliqua. Ut enim ad minim veniam,</p>
											</div>
										</div>
										
									</li>
								</ul>

							</li>
						</ol>
					</div>
					<div class="blog_comment_formdiv wow fadeInUp">
						<h3>Leave Comments</h3>
						<form class="comment-form">
							<div class="blog_row">
								<div class="blog_halfbox">
									<div class="blog_form_group">
										<input type="text" class="form-control" placeholder="Enter Your Name">
									</div>
								</div>
								<div class="blog_halfbox">
									<div class="blog_form_group">
										<input type="text" class="form-control" placeholder="Enter Your Email">
									</div>
								</div>
							</div>
							<div class="blog_row">
								<div class="blog_form_group">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
							</div>
							<div class="blog_row">
								<button class="blog_btn blog_bg_pink">Post comment</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 theiaStickySidebar">
					<div class="blog_sidebar">
						<div class="widget widget_social wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_pink">CONNECT</h3>
								</div>
							</div>
							<ul>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-facebook"></i>
										<h2>62.5K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-twitter"></i>
										<h2>62K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-youtube-play"></i>
										<h2>45K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-instagram"></i>
										<h2>62.5K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-pinterest-p"></i>
										<h2>62K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-rss"></i>
										<h2>45K</h2>
										<p>Followers</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="widget widget_recent_post wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_orange">What’s hot</h3>
								</div>
							</div>
							<ul>
								<li>
									<div class="blog_recent_post">
										<div class="blog_recent_post_img">
											<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
										</div>
										<div class="blog_recent_post_content">
											<h4><a href="#">Does US Tax Overhaul Violate Global Trade.</a></h4>
											<p>Sep 21,2018 <a href="#">- Sports</a></p>
										</div>
									</div>
								</li>
								<li>
									<div class="blog_recent_post">
										<div class="blog_recent_post_img">
											<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
										</div>
										<div class="blog_recent_post_content">
											<h4><a href="#">What should you take in your bag before going.</a></h4>
											<p>Sep 21,2018 <a href="#">- Sports</a></p>
										</div>
									</div>
								</li>
								<li>
									<div class="blog_recent_post">
										<div class="blog_recent_post_img">
											<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
										</div>
										<div class="blog_recent_post_content">
											<h4><a href="#">Take in your bag before going to hiking</a></h4>
											<p>Sep 21,2018 <a href="#">- Sports</a></p>
										</div>
									</div>
								</li>
								<li>
									<div class="blog_recent_post">
										<div class="blog_recent_post_img">
											<img src="https://via.placeholder.com/50x50" class="img-fluid" alt="">
										</div>
										<div class="blog_recent_post_content">
											<h4><a href="#">Your bag before going to parti hiking</a></h4>
											<p>Sep 21,2018 <a href="#">- Sports</a></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="widget widget_recent_news wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_lightblue">Recent News</h3>
								</div>
							</div>
							<ul>
								<li>
									<div class="blog_news">
										<div class="blog_news_title">
											<h4><a href="#">LA Marathon is long distance running from the stadium.</a></h4>
											<p>Sep 21,2018 <a href="#">- Sports</a></p>
										</div>
										<div class="blog_news_action">
											<span><i class="fa fa-ellipsis-v"></i></span>
										</div>
								<ul class="more_option">
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 350 350"><path fill="rgb(112, 112, 112)" d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587 C104.535,132.855,136.084,171.173,175,171.173z"/> <path fill="rgb(112, 112, 112)" d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/> <path fill="rgb(112, 112, 112)" d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/> <path fill="rgb(112, 112, 112)" d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761 s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131 c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496 c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"/>
									</svg>Profile</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"><path fill-rule="evenodd" fill="rgb(112, 112, 112)" d="M13.487,4.224 L12.869,4.844 L9.156,1.131 L9.775,0.512 C10.458,-0.171 11.567,-0.171 12.250,0.512 L13.487,1.750 C14.170,2.433 14.170,3.541 13.487,4.224 ZM4.825,11.649 C4.654,11.820 4.654,12.097 4.825,12.267 C4.996,12.439 5.273,12.439 5.444,12.267 L12.250,5.462 L11.631,4.843 L4.825,11.649 ZM1.731,8.555 C1.560,8.726 1.560,9.003 1.731,9.174 C1.902,9.345 2.179,9.345 2.350,9.174 L9.156,2.368 L8.538,1.750 L1.731,8.555 ZM9.774,2.987 L2.968,9.793 C2.626,10.134 2.627,10.688 2.968,11.030 C3.310,11.372 3.864,11.373 4.206,11.029 L11.012,4.224 L9.774,2.987 ZM4.205,12.884 C3.995,12.675 3.894,12.409 3.857,12.136 C3.768,12.150 3.678,12.162 3.587,12.162 C3.119,12.162 2.680,11.980 2.350,11.649 C2.019,11.317 1.837,10.879 1.837,10.411 C1.837,10.326 1.850,10.243 1.862,10.160 C1.579,10.122 1.317,9.998 1.112,9.793 C1.093,9.773 1.086,9.746 1.068,9.725 L-0.000,14.000 L4.263,12.932 C4.244,12.915 4.223,12.902 4.205,12.884 Z"></path></svg>Edit</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 511.626 511.627"> <path fill="rgb(112, 112, 112)" d="M506.206,179.012L360.025,32.834c-3.617-3.617-7.898-5.426-12.847-5.426s-9.233,1.809-12.847,5.426 c-3.617,3.619-5.428,7.902-5.428,12.85v73.089h-63.953c-135.716,0-218.984,38.354-249.823,115.06C5.042,259.335,0,291.03,0,328.907 c0,31.594,12.087,74.514,36.259,128.762c0.57,1.335,1.566,3.614,2.996,6.849c1.429,3.233,2.712,6.088,3.854,8.565 c1.146,2.471,2.384,4.565,3.715,6.276c2.282,3.237,4.948,4.859,7.994,4.859c2.855,0,5.092-0.951,6.711-2.854 c1.615-1.902,2.424-4.284,2.424-7.132c0-1.718-0.238-4.236-0.715-7.569c-0.476-3.333-0.715-5.564-0.715-6.708 c-0.953-12.938-1.429-24.653-1.429-35.114c0-19.223,1.668-36.449,4.996-51.675c3.333-15.229,7.948-28.407,13.85-39.543 c5.901-11.14,13.512-20.745,22.841-28.835c9.325-8.09,19.364-14.702,30.118-19.842c10.756-5.141,23.413-9.186,37.974-12.135 c14.56-2.95,29.215-4.997,43.968-6.14s31.455-1.711,50.109-1.711h63.953v73.091c0,4.948,1.807,9.232,5.421,12.847 c3.62,3.613,7.901,5.424,12.847,5.424c4.948,0,9.232-1.811,12.854-5.424l146.178-146.183c3.617-3.617,5.424-7.898,5.424-12.847 C511.626,186.92,509.82,182.636,506.206,179.012z"/>
										</svg>Share</a>
									</li>
								</ul>
									</div>
								</li>
								<li>
									<div class="blog_news">
										<div class="blog_news_title">
											<h4><a href="#">LA Marathon is long distance running from the stadium.</a></h4>
											<p>Sep 21,2018 <a href="#">- Sports</a></p>
										</div>
										<div class="blog_news_action">
											<span><i class="fa fa-ellipsis-v"></i></span>
										</div>
								<ul class="more_option">
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 350 350"><path fill="rgb(112, 112, 112)" d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587 C104.535,132.855,136.084,171.173,175,171.173z"/> <path fill="rgb(112, 112, 112)" d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/> <path fill="rgb(112, 112, 112)" d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/> <path fill="rgb(112, 112, 112)" d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761 s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131 c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496 c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"/>
									</svg>Profile</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"><path fill-rule="evenodd" fill="rgb(112, 112, 112)" d="M13.487,4.224 L12.869,4.844 L9.156,1.131 L9.775,0.512 C10.458,-0.171 11.567,-0.171 12.250,0.512 L13.487,1.750 C14.170,2.433 14.170,3.541 13.487,4.224 ZM4.825,11.649 C4.654,11.820 4.654,12.097 4.825,12.267 C4.996,12.439 5.273,12.439 5.444,12.267 L12.250,5.462 L11.631,4.843 L4.825,11.649 ZM1.731,8.555 C1.560,8.726 1.560,9.003 1.731,9.174 C1.902,9.345 2.179,9.345 2.350,9.174 L9.156,2.368 L8.538,1.750 L1.731,8.555 ZM9.774,2.987 L2.968,9.793 C2.626,10.134 2.627,10.688 2.968,11.030 C3.310,11.372 3.864,11.373 4.206,11.029 L11.012,4.224 L9.774,2.987 ZM4.205,12.884 C3.995,12.675 3.894,12.409 3.857,12.136 C3.768,12.150 3.678,12.162 3.587,12.162 C3.119,12.162 2.680,11.980 2.350,11.649 C2.019,11.317 1.837,10.879 1.837,10.411 C1.837,10.326 1.850,10.243 1.862,10.160 C1.579,10.122 1.317,9.998 1.112,9.793 C1.093,9.773 1.086,9.746 1.068,9.725 L-0.000,14.000 L4.263,12.932 C4.244,12.915 4.223,12.902 4.205,12.884 Z"></path></svg>Edit</a>
									</li>
									<li>
										<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 511.626 511.627"> <path fill="rgb(112, 112, 112)" d="M506.206,179.012L360.025,32.834c-3.617-3.617-7.898-5.426-12.847-5.426s-9.233,1.809-12.847,5.426 c-3.617,3.619-5.428,7.902-5.428,12.85v73.089h-63.953c-135.716,0-218.984,38.354-249.823,115.06C5.042,259.335,0,291.03,0,328.907 c0,31.594,12.087,74.514,36.259,128.762c0.57,1.335,1.566,3.614,2.996,6.849c1.429,3.233,2.712,6.088,3.854,8.565 c1.146,2.471,2.384,4.565,3.715,6.276c2.282,3.237,4.948,4.859,7.994,4.859c2.855,0,5.092-0.951,6.711-2.854 c1.615-1.902,2.424-4.284,2.424-7.132c0-1.718-0.238-4.236-0.715-7.569c-0.476-3.333-0.715-5.564-0.715-6.708 c-0.953-12.938-1.429-24.653-1.429-35.114c0-19.223,1.668-36.449,4.996-51.675c3.333-15.229,7.948-28.407,13.85-39.543 c5.901-11.14,13.512-20.745,22.841-28.835c9.325-8.09,19.364-14.702,30.118-19.842c10.756-5.141,23.413-9.186,37.974-12.135 c14.56-2.95,29.215-4.997,43.968-6.14s31.455-1.711,50.109-1.711h63.953v73.091c0,4.948,1.807,9.232,5.421,12.847 c3.62,3.613,7.901,5.424,12.847,5.424c4.948,0,9.232-1.811,12.854-5.424l146.178-146.183c3.617-3.617,5.424-7.898,5.424-12.847 C511.626,186.92,509.82,182.636,506.206,179.012z"/>
										</svg>Share</a>
									</li>
								</ul>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.frontend.partials.footer')
<!--Main js file Style-->
<script src="{{ asset('frontend/js/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/blog/theia-sticky-sidebar.js') }}"></script>
<script src="{{ asset('frontend/blog/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/blog/magnific/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/blog/wow.min.js') }}"></script>
<!--Main js file Style-->

	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	{{-- <script src="{{ asset('frontend/js/isotope.pkgd.js') }}"></script> --}}
	{{-- <script src="{{ asset('frontend/js/isotop.js') }}"></script> --}}
	{{-- <script src="{{ asset('frontend/js/countTo.js') }}"></script> --}}
	<script src="{{ asset('frontend/js/appear.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
