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
				<div class="navbar navbar-default" id="top-nav">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="main-menu"><a href="#">Home</a></li>
								<li class="main-menu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Items</a>
									<ul class="dropdown-menu">
										<li><a href="#">Items 1</a></li>
										<li><a href="#">Items 2</a></li>
										<li><a href="#">Items 3</a></li>
										<li><a href="#">Items 4</a></li>
										<li><a href="#">Items 5</a></li>
										<li><a href="#">Items 6</a></li>
										<li><a href="#">Items 7</a></li>
										<li><a href="#">Items 8</a></li>
									</ul>
								</li>
								<li class="main-menu dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Partners</a>
									<ul class="dropdown-menu">
										<li><a href="#">Partner 1</a></li>
										<li><a href="#">Partner 2</a></li>
										<li><a href="#">Partner 3</a></li>
										<li><a href="#">Partner 4</a></li>
										<li><a href="#">Partner 5</a></li>
										<li><a href="#">Partner 6</a></li>
										<li><a href="#">Partner 7</a></li>
										<li><a href="#">Partner 8</a></li>
										<li><a href="#">Partner 9</a></li>
										<li><a href="#">Partner 10</a></li>
										<li><a href="#">Partner 11</a></li>
										<li><a href="#">Partner 12</a></li>
										<li><a href="#">Partner 1</a></li>
										<li><a href="#">Partner 2</a></li>
										<li><a href="#">Partner 3</a></li>
										<li><a href="#">Partner 4</a></li>
										<li><a href="#">Partner 5</a></li>
										<li><a href="#">Partner 6</a></li>
										<li><a href="#">Partner 7</a></li>
										<li><a href="#">Partner 8</a></li>
										<li><a href="#">Partner 9</a></li>
										<li><a href="#">Partner 10</a></li>
										<li><a href="#">Partner 11</a></li>
										<li><a href="#">Partner 12</a></li>
									</ul>
								</li>
								<li class="main-menu"><a href="#">About Us</a></li>
								<li class="main-menu"><a href="#">Videos</a></li>
							</ul>
						</div>
					</div>
				</div>
			<!-- End main top navigation -->
		</header>
		<!-- End page header -->				

		
		<div class="wrapper">
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
			
			<!-- Selected products -->
			<div class="panel panel-default items-section">
				<div class="panel-heading heading">Selected Products</div>
				<div class="panel-body items">
					<div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui beatae illum dolor sed, commodi placeat provident aliquid iste odit, laudantium hic. Quo harum magnam, esse nesciunt iste hic deserunt recusandae.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>
				</div>
			</div>
			<!-- End selected products -->

			<!-- Referal from doctors -->
			<div class="panel panel-default items-section">
				<div class="panel-heading heading">Referal from Doctors</div>
				<div class="panel-body items">
					<div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum id magnam saepe quisquam minima facilis eaque, eligendi temporibus quae vero, natus pariatur, accusamus cupiditate est culpa sequi repellendus excepturi soluta.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum id magnam saepe quisquam minima facilis eaque, eligendi temporibus quae vero, natus pariatur, accusamus cupiditate est culpa sequi repellendus excepturi soluta.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>

			    <div class="item-content clearfix">
			      <img src="{{ asset('assets/images/thumbnails/content.jpg') }}" alt="...">
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum id magnam saepe quisquam minima facilis eaque, eligendi temporibus quae vero, natus pariatur, accusamus cupiditate est culpa sequi repellendus excepturi soluta.</p>
			      <div class="more">
			      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
			      </div>
			    </div>
				</div>
			</div>
			<!-- End referal from doctors -->

			<!-- New arrival products in stock -->
			<div class="panel panel-default items-section">
				<div class="panel-heading heading">New Arrival Products in Stock</div>
				<div class="panel-body esg-panel">					
					<!-- Nav tabs -->
				  <ul class="nav nav-pills esg-filter clearfix" id="iso-filters">
       			<li class="active"><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
       			<li><a href="#" class="opc-main-bg" data-filter=".web">Web Hosting</a></li>
       			<li><a href="#" class="opc-main-bg" data-filter=".design">Web Desing</a></li>
        		<li><a href="#" class="opc-main-bg" data-filter=".application">Web Application</a></li>
        		<li><a href="#" class="opc-main-bg" data-filter=".camera">Camera Security</a></li>
						<li><a href="#" class="opc-main-bg" data-filter=".network">NETWORK SOLUTION</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".computer">COMPUTER SOLUTION</a></li>
       		</ul>

				  <!-- Tab panes -->
				  <div class="isotope grid esg-iso">
					  <div class="element-item web visible"><img src="{{ asset('assets/images/isotope/portfolio-1.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web visible"><img src="{{ asset('assets/images/isotope/portfolio-2.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item application visible"><img src="{{ asset('assets/images/isotope/portfolio-3.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item camera visible"><img src="{{ asset('assets/images/isotope/portfolio-4.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item network camera visible"><img src="{{ asset('assets/images/isotope/portfolio-5.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web network"><img src="{{ asset('assets/images/isotope/portfolio-6.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web network"><img src="{{ asset('assets/images/isotope/portfolio-7.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web network"><img src="{{ asset('assets/images/isotope/portfolio-8.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web network"><img src="{{ asset('assets/images/isotope/portfolio-9.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web network"><img src="{{ asset('assets/images/isotope/portfolio-10.jpg') }}" alt="portfolio img" width="200"></div>
					  <div class="element-item design web network"><img src="{{ asset('assets/images/isotope/portfolio-11.jpg') }}" alt="portfolio img" width="200"></div>
				  </div>
				  <div class="esg-paging">
				  	<ul class="pager">
					    <li><a href="#" class="btn-previous"><i class="fa fa-chevron-left"></i></a></li>
					    <li><a href="#" class="btn-next"><i class="fa fa-chevron-right"></i></a></li>
					  </ul>
				  </div>		  
				</div>
			</div>
			<!-- End new arrival products in stock -->

			<!-- Contact, Map ... -->
			<div class="section-7">
				<div class="box" id="mailing-sub">
					<h3>Register for new arrival products</h3>
					<form>
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="name">First name</label>
					    <input type="text" class="form-control" id="name">
					  </div>
					  <div class="form-group">
						  <button type="submit" class="form-control btn">Subscribe</button>
					  </div>
					</form>
				</div>
				
				<div class="box" id="map"></div>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAGTfDq5N1x5KwQWyyhfD-6Ct4cyLNcuo"></script>
		    <script>
		      // In the following example, markers appear when the user clicks on the map.
		      // Each marker is labeled with a single alphabetical character.
		      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		      var labelIndex = 0;

		      function initialize() {
		        var bangalore = { lat: 11.547918, lng: 104.868550 };
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 16,
		          center: bangalore,
		           mapTypeControl: false,
		           streetViewControl: false
		        });

		        // This event listener calls addMarker() when the map is clicked.
		        google.maps.event.addListener(map, 'click', function(event) {
		          addMarker(event.latLng, map);
		        });

		        // Add a marker at the center of the map.
		        addMarker(bangalore, map);
		      }

		      // Adds a marker to the map.
		      function addMarker(location, map) {
		        // Add the marker at the clicked location, and add the next-available label
		        // from the array of alphabetical characters.
		        var marker = new google.maps.Marker({
		          position: location,
		          label: labels[labelIndex++ % labels.length],
		          map: map
		        });
		      }

		      google.maps.event.addDomListener(window, 'load', initialize);
		    </script>

				<div class="box"></div>
			</div>
			<!-- End Contact, Map ... -->
		</div>

		<!-- Page footer -->
		<!-- End page footer -->
	</div>
	<!-- scripts -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/greensock.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/isotope.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/horizontal.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
	
	<script type="text/javascript">		
		var $grid = $('.grid').isotope({
		  itemSelector: '.element-item',
		  layoutMode: 'horiz',
		  hiddenStyle: {
			  opacity: 0
			},
			visibleStyle: {
			  opacity: 1
			},
		  filter: '.visible'
		});

		fn_pagination = function(items_per_page, total){

			current_page = 1;
			items_per_page = items_per_page;
			total = total;	
			
			getTotalPages = function(){
				return Math.ceil(total / items_per_page);
			}

			next = function(){
				return current_page >= totalPages ? totalPages : ++current_page;
			}

			previous = function(){
				return current_page <= 1 ? 1 : --current_page;
			}

			getTo = function(){
				var to = current_page * items_per_page
				return to > total ? total : to;
			}

			getFrom = function(){
				return (current_page * items_per_page) - items_per_page + 1;
			}

			var totalPages = getTotalPages();

			return {
				next: next,
				previous: previous,
				from: getFrom,
				to: getTo
			};
		};

		var p = new fn_pagination(5, 11);

		// bind filter button click
		$('#iso-filters li a').on( 'click', function(e) {
			e.preventDefault();

			// Add active class.
			$(this).parent('li').siblings().removeClass('active');
			$(this).parent('li').addClass('active');
			
			// Arrange isotope elements.
		  var filterValue = $( this ).attr('data-filter');
		  $grid.isotope({ filter: filterValue + '.visible' });
		});

		$('.btn-previous').on( 'click', function(e) {
			e.preventDefault();		
			$('.element-item').each(function(i, el){
				$(this).removeClass('visible');
			});

			p.previous();

			for(var i=p.from()-1; i<p.to(); i++){
				$('.element-item').eq(i).addClass('visible');
			}
			
			$grid.isotope({ filter: '.visible' });
		});

		$('.btn-next').on( 'click', function(e) {
			e.preventDefault();
			$('.element-item').each(function(i, el){
				$(this).removeClass('visible');
			});

			p.next();

			for(var i=p.from()-1; i<p.to(); i++){
				$('.element-item').eq(i).addClass('visible');
			}

			$grid.isotope({ filter: '.visible' });
		});
	</script>
	<!-- end scripts -->
</body>
</html>