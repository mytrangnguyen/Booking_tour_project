<!doctype html>
<html lang="en">
 <head>
    <title>Travalers &mdash;Go with us</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="/Booking_tour/public/source/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/magnific-popup.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/jquery-ui.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/aos.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/style.css">
    <link rel="stylesheet" href="/Booking_tour/public/source/css/newstyle.css">
    
  </head>
<body>

	@include('header')
	<div class="site-wrap">
		@yield('content')

	</div>
	@include('footer')

	@include('script')
</body>
</html>
