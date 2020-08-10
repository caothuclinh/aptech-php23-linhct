<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<base href="{{ asset('') }}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="btr/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="btr/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="btr/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="btr/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="btr/assets/dest/css/style.css">
	<link rel="stylesheet" href="btr/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="btr/assets/dest/css/huong-style.css">
</head>
<body>
	@include('layout/header')
	
	<!--slider-->
	@yield('content')	

	@include('layout/footer')
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="btr/assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="btr/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="btr/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="btr/assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	@include('.layout/script')
</body>
</html>
