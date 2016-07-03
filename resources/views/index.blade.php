<!DOCTYPE html>
<html>
<head>	
		<title>Clinico - Responsive Medical and Health Template</title>

		<link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet" type="text/css">
		
		<!-- metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<!--/ metas -->
		
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layerslider.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
		<!--/ styles -->
		
		<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body class="en">
	<div class="container-fluid">
		<!-- Page header -->
		<header class="wrapper page-header main-page">
			<section class="section-1 clearfix">
				<a href="#" class="language-icon"><img src="{{ asset('assets/images/languages/english.png') }}"></a>
				<a href="#" class="language-icon"><img src="{{ asset('assets/images/languages/khmer.png') }}"></a>
			</section>
			<!-- logo -->
			<section class="section-2 clearfix">
				<div id="company-logo">
					<a href="/"><img src="{{ asset('assets/images/logo/company-logo.png') }}" alt="24 Seven Health Care"></a>
				</div>
				
				<div id="board">
					<div class="item">
						<span class="icon"><i class="fa fa-phone"></i></span>
						<span class="info">
							<span class="info-1">023 223 963</span>
							<span class="info-2">24seven@24seven.com.kh</span>
						</span>
					</div>
					<div class="item">
						<span class="icon"><i class="fa fa-home"></i></span>
						<span class="info">
							<span class="info-1">No. 193, St. 208</span>
							<span class="info-2">Boeung Raing, Daun Penh, PP</span>
						</span>
					</div>
					<div class="item">
						<span class="icon"><i class="fa fa-clock-o"></i></span>
						<span class="info">
							<span class="info-1">8:00 AM - 5:00 PM</span>
							<span class="info-2">Monday - Saturday</span>
						</span>
					</div>
				</div>

				<div id="social">
					<a href="#"><img src="{{ asset('assets/images/socials/fb.png') }}"></a>
					<a href="#"><img src="{{ asset('assets/images/socials/youtube.png') }}"></a>
					<a href="#"><img src="{{ asset('assets/images/socials/instagram.png') }}"></a>
					<a href="#"><img src="{{ asset('assets/images/socials/line.png') }}"></a>
				</div>
			</section>
			<!--/ logo -->

			<!-- Main top navigation -->
				<ul class="nav nav-pills" id="top-nav">
				  <li role="presentation" class="main-menu"><a href="#">Home</a></li>
				  <li role="presentation" class="main-menu dropdown">
				  	<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Items</a>
				  	<ul class="dropdown-menu">
				  		<li role="separator" class="divider"></li><li><a href="#">Item 1</a></li>
				  		<li role="separator" class="divider"></li><li><a href="#">Item 2</a></li>
				  		<li role="separator" class="divider"></li><li><a href="#">Item 3</a></li>
				  		<li role="separator" class="divider"></li><li><a href="#">Item 4</a></li>
				  		<li role="separator" class="divider"></li><li><a href="#">Item 5</a></li>
				  		<li role="separator" class="divider"></li><li><a href="#">Item 6</a></li>
				  		<li role="separator" class="divider"></li><li><a href="#">Item 7</a></li>
				  	</ul>
				  </li>
				  <li role="presentation" class="main-menu"><a href="#">Our Partners</a></li>
				  <li role="presentation" class="main-menu"><a href="#">About Us</a></li>
				  <li role="presentation" class="main-menu"><a href="#">Videos</a></li>
				</ul>
			<!-- End main top navigation -->
		</header>
		<!-- End page header -->				

		<!-- Page middle wrapper -->
		<div class="wrapper middle-wrapper">
			<!-- slider -->
			<div class="slider-wrapper">
				<section class="slider" id="slider">
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="{{ asset('assets/images/slides/Implants-1x1150.jpg') }}" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
							<span class="icon fa fa-heart"></span>
							<h2><span>SYMPTOM</span>CHECKER</h2>
							<p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Read More</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
						<img src="{{ asset('assets/images/slides/Implants-2x1150.jpg') }}" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="scalexin:0.3;scaleyin:0.3;rotatexin:180;offsetxin:0;durationin:2000;durationout:2000;scalexout:2;scaleyout:2;offsetxout:0;fadeout:true;showuntil:3000;" style="left:80%;top:35%;">
							<span class="icon fa fa-comments"></span>
							<h2><span>HELP</span>ONLINE</h2>
							<p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Read More</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
						<img src="{{ asset('assets/images/slides/Implants-1x1150.jpg') }}" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="skewxin:30;skewyin:0;offsetxin:right;fadein:false;durationin:2000;durationout:1000;offsetxout:right;offsetyout:0;fadeout:true;" style="left:80%;top:35%;">
							<span class="icon fa fa-flask"></span>
							<h2><span>LAB</span>TESTING</h2>
							<p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Read More</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!--/ slider -->
		</div>
		<!-- End page middle wrapper -->

		<!-- Page footer -->
		<!-- End page footer -->
	</div>
	<!-- scripts -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/greensock.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>

	<!-- end scripts -->
</body>
</html>