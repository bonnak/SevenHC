$(document).ready(function (){
	/**
	 * Slider
	 */
	$("#slider").layerSlider({
			width : '100%', 
			height : '407px',
			autoStart : true,
			responsive : true,
			responsiveUnder : 0,
			sublayerContainer : 0,
			firstLayer : 1,
			twoWaySlideshow : false,
			randomSlideshow : false,
			keybNav : true,
			touchNav : true,
			imgPreload : true,
			navPrevNext : false,
			navStartStop : false,
			navButtons : false,
			thumbnailNavigation : 'none',
			tnWidth : 100,
			tnHeight : 60,
			tnContainerWidth : '60%',
			tnActiveOpacity : 35,
			tnInactiveOpacity : 100,
			hoverPrevNext : true,
			hoverBottomNav : false,
			skin					: 'fullwidth',
			skinsPath				: '/assets/css/',
			pauseOnHover			: true,
			globalBGColor			: 'transparent',
			globalBGImage			: false,
			animateFirstLayer		: false,
			yourLogo				: false,
			yourLogoStyle			: 'position: absolute; z-index: 1001; left: 10px; top: 10px;',
			yourLogoLink			: false,
			yourLogoTarget			: '_blank',
			loops					: 0,
			forceLoopNum			: true,
			autoPlayVideos			: true,
			autoPauseSlideshow		: 'auto',
			youtubePreview			: 'maxresdefault.jpg',
			showBarTimer		: false,
			showCircleTimer		: false,

			// you can change this settings separately by layers or sublayers with using html style attribute

			slideDirection			: 'right',
			slideDelay				: 4000,
			durationIn				: 1000,
			durationOut				: 1000,
			easingIn				: 'easeInOutQuint',
			easingOut				: 'easeInOutQuint',
			delayIn					: 0,
			delayOut				: 0
  });

  /**
   * Top navigation
   */
  var dropdown_menu = $('#top-nav .dropdown').children('.dropdown-menu');
  
  $(dropdown_menu).each(function(index, el){
  	$(el).children('li').each(function(index, el){
  		console.log($(el).width(), $(el).height());
  	});
  });

  $('#top-nav .dropdown').hover(
  	function(){  	
  		$(this).addClass('open');

	  	var dropdown_menu = $(this).children('.dropdown-menu')[0];
	  	var li = $(dropdown_menu).children('li');
	  	var max_row = 10;
	  	var num_col = $(li).length > max_row ? Math.ceil($(li).length / max_row) : 1;
	  	var num_row = $(li).length <= max_row ? $(li).length : max_row;
	  	var d_width = $(li).outerWidth() * num_col;
	  	var d_height = $(li).outerHeight() * num_row;

	  	console.log($(li), num_row, num_col);

	  	$(dropdown_menu).width(d_width);
	  	$(dropdown_menu).height(d_height + 5);
	  	
	  },
	  function() {
	    $( this ).removeClass('open');
	  }
  );
});
//# sourceMappingURL=all.js.map
