<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Page</title>
	
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>
<body>
	<div class="main-con">
		<div class="top-header"></div>
		<div class="main-wrapper">
			<div class="section-navs">
				@include('admin._partials.navs')
			</div>
			<div class="section-content">
				@yield('dashboard')
				@yield('content')
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.main-con').css('height', $( window ).height());

			$( window ).resize(function() {
			  $('.main-con').css('height', $( window ).height());
			});
		});
	</script>


  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
  @yield('script')
</body>
</html>