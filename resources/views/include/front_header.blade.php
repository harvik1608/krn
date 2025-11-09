<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="{{ APP_NAME }}">
		<title>{{ APP_NAME }}</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/website/images/favicon.png') }}">
		<link href="{{ asset('assets/website/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('assets/website/css/slicknav.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/website/css/swiper-bundle.min.css') }}">
		<link href="{{ asset('assets/website/css/all.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('assets/website/css/animate.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/website/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/website/css/mousecursor.css') }}">
		<link href="{{ asset('assets/website/css/custom.css') }}" rel="stylesheet" media="screen">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
		<style>
			body {
				font-family: "Nunito", serif !important;
				font-optical-sizing: auto;
				font-weight: 400;
				font-style: normal;
			}
			div[class$="-error"] {
				color: #FF0000;
			}
		</style>
	</head>
	<body>
		<div class="preloader">
			<div class="loading-container">
				<div class="loading"></div>
				<div id="loading-icon"><img src="{{ asset('assets/website/images/loader.svg') }}" alt=""></div>
			</div>
		</div>
		<header class="main-header">
			<div class="header-sticky">
				<nav class="container">
					<div class="navbar navbar-expand-lg">
						<a class="navbar-brand" href="{{ route('home') }}">
							<img src="{{ asset('assets/website/images/krn_logo.jpg') }}" alt="Logo">
						</a>
						<div class="collapse navbar-collapse main-menu">
	                        <div class="nav-menu-wrapper">
	                            <ul class="navbar-nav mr-auto" id="menu">
	                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a>
	                                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a>
	                                <li class="nav-item"><a class="nav-link" href="{{ route('resources') }}">Resources</a>
	                                <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a>
	                                <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
	                                <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a></li>                             
	                            </ul>
	                        </div>
	                        <div class="header-btn d-inline-flex">
	                            <a href="{{ route('contact-us') }}" class="btn-default">get in touch</a>
	                        </div>
						</div>
						<div class="navbar-toggle"></div>
					</div>
				</nav>
				<div class="responsive-menu"></div>
			</div>
		</header>
		@yield('content')
		<footer class="main-footer">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <!-- Footer Header Start -->
	                    <div class="footer-header">
	                        <div class="row align-items-center">  
	                            <div class="col-md-6">
	                                <!-- Footer Logo Start -->
	                                <div class="footer-logo">
	                                    <img src="{{ asset('assets/website/images/krn_logo.jpg') }}" alt="">
	                                </div>
	                                <!-- Footer Logo End -->
	                            </div>

	                            <div class="col-md-6">
	                                <!-- Footer Social Link Start -->
	                                <div class="footer-social-links">
	                                    <div class="footer-social-link-title">
	                                        <h3>follow our socials</h3>
	                                    </div>
	                                    <ul>
	                                        @if(FACEBOOK_URL != "")
	                                        	<li><a href="{{ FACEBOOK_URL }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
	                                        @endif
	                                        @if(TWITTER_URL != "")
	                                        	<li><a href="{{ TWITTER_URL }}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
	                                        @endif
	                                        @if(LINKEDIN_URL != "")
	                                        	<li><a href="{{ LINKEDIN_URL }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
	                                        @endif
	                                    </ul>
	                                </div>
	                                <!-- Footer Social Link End -->
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Footer Header End -->
	                </div>

	                <div class="col-lg-4 col-md-6">
	                    <!-- Footer Links Start -->
	                     <div class="footer-links">
	                        <h3>information</h3>
	                        <ul>
	                            <li><a href="{{ route('about') }}">about our company</a></li>
	                            <li><a href="{{ route('resources') }}">our resources</a></li>
	                            <li><a href="{{ route('blogs') }}">our blog</a></li>
	                            <li><a href="{{ route('projects') }}">our latest projects</a></li>
	                            <li><a href="{{ route('projects') }}">our FAQ</a></li>
	                        </ul>
	                     </div>
	                    <!-- Footer Links End -->
	                </div>

	                <div class="col-lg-4 col-md-6">
	                    <!-- Footer Links Start -->
	                     <div class="footer-links">
	                        <h3>Our Services</h3>
	                        <ul>
	                        	@php
	                        		$services = services();
	                        	@endphp
	                        	@if($services)
	                        		@foreach($services as $service)
	                        			<li><a href="{{ route('service',['slug' => $service->slug]) }}">{{ $service->name }}</a></li>
	                        		@endforeach
	                        	@endif
	                        </ul>
	                     </div>
	                    <!-- Footer Links End -->
	                </div>

	                <div class="col-lg-4 col-md-6">
	                    <!-- Footer Contact Box Start -->
	                    <div class="footer-contact-box footer-links">
	                        <h3>contact us</h3>
	                        <!-- Footer Contact Item Start -->
	                        <div class="footer-contact-item">
	                            <div class="icon-box">
	                                <i class="fa-solid fa-phone"></i>
	                            </div>
	                            <div class="footer-contact-content">
	                                <p>{{ APP_PHONE }}</p>
	                            </div>
	                        </div>
	                        <!-- Footer Contact Item End -->

	                        <!-- Footer Contact Item Start -->
	                        <div class="footer-contact-item">
	                            <div class="icon-box">
	                                <i class="fa-solid fa-envelope"></i>
	                            </div>
	                            <div class="footer-contact-content">
	                                <p>{{ APP_EMAIL }}</p>
	                            </div>
	                        </div>
	                        <!-- Footer Contact Item End -->

	                        <!-- Footer Contact Item Start -->
	                        <div class="footer-contact-item">
	                            <div class="icon-box">
	                                <i class="fa-solid fa-location-dot"></i>
	                            </div>
	                            <div class="footer-contact-content">
	                                <p>{{ APP_ADDRESS }}</p>
	                            </div>
	                        </div>
	                        <!-- Footer Contact Item End -->
	                    </div>
	                    <!-- Footer Contact Box End -->
	                </div>
	            </div>

	            <!-- Footer Copyright Section Start -->
	            <div class="footer-copyright">
	                <div class="row">
	                    <div class="col-md-12">
	                        <!-- Footer Copyright Start -->
	                        <div class="footer-copyright-text">
	                            <p>Copyright © {{ date('Y') }} All Rights Reserved.</p>
	                        </div>
	                        <!-- Footer Copyright End -->
	                    </div>
	                </div>
	            </div>
	            <!-- Footer Copyright Section End -->
	        </div>
	    </footer>
		<script src="{{ asset('assets/website/js/jquery-3.7.1.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/validator.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/jquery.slicknav.js') }}"></script>
		<script src="{{ asset('assets/website/js/swiper-bundle.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/isotope.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/SmoothScroll.js') }}"></script>
		<script src="{{ asset('assets/website/js/parallaxie.js') }}"></script>
		<script src="{{ asset('assets/website/js/gsap.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/magiccursor.js') }}"></script>
		<script src="{{ asset('assets/website/js/SplitText.js') }}"></script>
		<script src="{{ asset('assets/website/js/ScrollTrigger.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/jquery.mb.YTPlayer.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/website/js/function.js') }}"></script>
		<script src="{{ asset('custom.js') }}"></script>
	</body>
</html>