<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="{{ $app->name }}" content="{{ $app->details }}">
		<meta name="{{ $app->name }}" content="{{ $app->moto }}">
		<meta name="{{ $app->name }}" content="{{ $app->category }}">
		<meta name="{{ $app->name }}" content="{{ $app->location }}">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ $app->name }}</title>
		@if(isset($app->image))
		<link rel="icon" href="{{ asset("images/app/$app->image") }}" type="image/png">
		@else
		<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
		@endif
		
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/bootstrap4/bootstrap.min.css') }}">
		<link href="{{ asset('OneTech/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/plugins/OwlCarousel2-2.2.1/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/main_styles.css') }}">
		@if(request()->is('/'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/plugins/slick-1.8.0/slick.css') }}">
		
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/responsive.css') }}">
		@elseif(request()->is('product'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/product_styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/product_responsive.css') }}">
		@elseif(request()->is('cart'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/cart_styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/cart_responsive.css') }}">
		@elseif(request()->is('shop'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/shop_styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/shop_responsive.css') }}">
		@elseif(request()->is('blog'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/blog_styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/blog_responsive.css') }}">
		@elseif(request()->is('blog_single'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/blog_single_styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/blog_single_responsive.css') }}">
		@elseif(request()->is('contact'))
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/contact_styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('OneTech/styles/contact_responsive.css') }}">
		@endif
	</head>
	<body>
		<div class="super_container">
			<header class="header">
				@include('front.layout.topbar')
				@include('front.layout.main_header')
				@include('front.layout.main_nav')
				@include('front.layout.nav_small')
			</header>
			@yield('content')
			@include('front.layout.footer')
		</div>
		<script src="{{ asset('OneTech/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('OneTech/styles/bootstrap4/popper.js') }}"></script>
		<script src="{{ asset('OneTech/styles/bootstrap4/bootstrap.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/greensock/TweenMax.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/greensock/TimelineMax.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/greensock/animation.gsap.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/easing/easing.js') }}"></script>
		@if(request()->is('/'))
		<script src="{{ asset('OneTech/plugins/slick-1.8.0/slick.js') }}"></script>
		<script src="{{ asset('OneTech/js/custom.js') }}"></script>
		@elseif(request()->is('product'))
		<script src="{{ asset('OneTech/js/product_custom.js') }}"></script>
		@elseif(request()->is('cart'))
		<script src="{{ asset('OneTech/js/cart_custom.js') }}"></script>
		@elseif(request()->is('shop'))
		<script src="{{ asset('OneTech/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
		<script src="{{ asset('OneTech/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="{{ asset('OneTech/js/shop_custom.js') }}"></script>
		@elseif(request()->is('blog'))
		<script src="{{ asset('OneTech/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="{{ asset('OneTech/js/blog_custom.js') }}"></script>
		@elseif(request()->is('blog_single'))
		<script src="{{ asset('OneTech/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="{{ asset('OneTech/js/blog_single_custom.js') }}"></script>
		@elseif(request()->is('contact'))
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
		<script src="{{ asset('OneTech/js/contact_custom.js') }}"></script>
		@endif
	</body>
</html>