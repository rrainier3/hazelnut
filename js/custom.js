 // ===============================================//
 // ========== START SCROLL TO TOP SCRIPT ==========//
 // ===============================================//
 (function($) { "use strict";
$(document).ready(function() {
     $(".scrollup").hide();
     $(window).scroll(function() {
         if ($(this).scrollTop() > 400) {
             $('.scrollup').fadeIn();
         } else {
             $('.scrollup').fadeOut();
         }
     });
 });
 })(jQuery);
// ===============================================//
// ========== END SCROLL TO TOP SCRIPT ==========//
// ===============================================//

// ===============================================//
 // ==========  START STYLE SWITCH ========== //
 // ===============================================//
    (function($) { "use strict";
 $(document).ready(function(){
  $('.style-switch-button').click(function(){
  $('.style-switch-wrapper').toggleClass('active');
  });
  $('a.close-styler').click(function(){
  $('.style-switch-wrapper').removeClass('active');
  });
});
 })(jQuery);
 // ===============================================//
   // ========== END STYLE SWITCH ========== //
   // ===============================================//
   
// ===============================================//
// ========== START BOOTSTRAP CAROUSEL SETTINGS ==========//
// ===============================================//
 (function($) { "use strict";
$('.carousel').carousel({
  interval: 3000
});
 })(jQuery);
// ===============================================//
// ========== END BOOTSTRAP CAROUSEL SETTINGS ==========//
// ===============================================//


// ===============================================//
// ========== START PAGE LOADER ==========//
// ===============================================//
 (function($) { "use strict";

$(window).load(function() {
	$(".loader-img").delay(500).fadeOut();
	$("#pageloader").delay(1000).fadeOut("slow");
	var hash = window.location.hash;
	if(!hash) { 
	// Do nothing //
	} else {
	$(document).scrollTop( $(hash).offset().top -58); 
}
});
 })(jQuery);
// ===============================================//
// ========== END PAGE LOADER ==========//
// ===============================================//
	 
	 
// ===============================================//
// ========== START BOOTSTRAP SCROLLSPY ==========//
// ===============================================//
 (function($) { "use strict";
	 $('html').scrollspy({ target: '.top-menu' });
	  })(jQuery);
// ===============================================//
// ========== END BOOTSTRAP SCROLLSPY ==========//
// ===============================================//
	 
// ===============================================//
// ========== START BOOTSTRAP ACCORDIAN SETTINGS ==========//
// ===============================================//
(function($) { "use strict";
var $accordion = $('#accordion .panel a');
$accordion.click(function(){
   $accordion.removeClass('selected');
   $(this).addClass('selected');
});
$('#accordion .panel a').on('click',function(e){
    if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
     $accordion.removeClass('selected');
    }
});
})(jQuery);
// ===============================================//
// ========== END BOOTSTRAP ACCORDIAN SETTINGS ==========//
// ===============================================//



// ===============================================//
// ========== START SCROLL TO REPLY SECTION ==========//
 // ===============================================//
 (function($) { "use strict";
		$(".go-to-reply").click(function() {
     $('html, body').animate({
         scrollTop: $("#formID").offset().top -155 }, 600);
 });
 })(jQuery);
// ===============================================//
// ========== END SCROLL TO REPLY SECTION ==========//  
// ===============================================//
	 
// ===============================================//
// ========== START REVOLUTION SLIDER SETTINGS ==========//
// ===============================================//
	  (function($) { "use strict";
var revapi;

				jQuery(document).ready(function() {

					   revapi = jQuery('.tp-banner').revolution(
						{
							delay:10000,
							startwidth:1170,
							startheight:600,
							hideThumbs:10,
							fullWidth:"off",
							fullScreen:"on",
							fullScreenOffsetContainer: "",
							navigationType:"bullet",
							navigationArrows:"solo",						// use none, bullet or thumb
							navigationStyle:"round",     // round, square, navbar, round-old, square-old, navbar-old 
							touchenabled:"on",
							onHoverStop:"off"
						});

				});	//ready
 })(jQuery); 
// ===============================================//
// ========== END REVOLUTION SLIDER SETTINGS ==========//
// ===============================================//

// ===============================================//
 // ========== START PARALLAX STELLAR SCRIPT ==========//
 // ===============================================//
 (function($) { "use strict";
				$('.parallax').stellar();
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 0
			});
		 })(jQuery);
// ===============================================//
// ========== END PARALLAX STELLAR SCRIPT ==========//
// ===============================================//

// ===============================================//
// ============== SMOOTH SCROLL SETTINGS =============//
// ===============================================//
	    (function($) { "use strict";
smoothScroll.init({
    speed: 500, // How fast to complete the scroll in milliseconds
    easing: 'easeOutQuart', // Easing pattern to use
    updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
    callbackBefore: function () {}, // Function to run before scrolling
    callbackAfter: function () {} // Function to run after scrolling
});
 })(jQuery); 
 // ===============================================//
// =========== END SMOOTH SCROLL SETTINGS =============//
// ===============================================//
 
 // ===============================================//
   // ========== CLOSE MOBILE MENU ON SELECT ========== //
   // ===============================================//
    (function($) { "use strict";
 $(document).ready(function(){
  $('.navbar-nav li a').click(function(){
  $('.navbar-collapse').removeClass('in').addClass('collapse');
  });
});
 })(jQuery);
 // ===============================================//
   // ========== END CLOSE MOBILE MENU ON SELECT ========== //
   // ===============================================//
 
// ===============================================//
// ========== START GOOGLE MAP SETTINGS ==========33.69940649999999,-117.8468216//
// ===============================================//
var map;
var myLatLng = new google.maps.LatLng(41.9647136,-87.9905586);

function initialize() {

  var roadAtlasStyles = [ 
	{ "featureType": "poi", "elementType": "labels", "stylers": [ { "visibility": "off" } ] }, 
    { "elementType": "geometry.fill", 	"stylers": [ { "color": "#424957" } ] },
	{ "elementType": "labels.text", "stylers": [ { "color": "#ffffff" }, { "weight": 0.1 } ] },
	{ "elementType": "labels.text.stroke", "stylers": [ { "color": "#000000" }, { "weight": 0.2 }, { "invert_lightness": true } ] },
	{ "featureType": "water", "stylers": [ { "color": "#445069" } ] },
	{ "featureType": "road.highway", "elementType": "geometry.stroke" }
  ];

  var mapOptions = {
      zoom: 15,
    center: myLatLng,
	disableDefaultUI: true,
	scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
    }
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
   
  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: 'img/location-icon.png',
	  title: '',
  });
  
  var contentString = '<div style="max-width: 300px" id="content">'+
      '<div id="bodyContent">'+
	  '<h5 class="color-primary"><strong>Roys Lawn Service Inc.</strong></h5>' +
      '<p style="font-size: 12px">306 W Irving Park Rd, Wood Dale, IL 60191 USA' +
      ' Tel 630-595-7560</p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });

  var styledMapOptions = {
    name: 'US Road Atlas'
  };

  var usRoadMapType = new google.maps.StyledMapType(
      roadAtlasStyles, styledMapOptions);

  map.mapTypes.set('usroadatlas', usRoadMapType);
  map.setMapTypeId('usroadatlas');
}

google.maps.event.addDomListener(window, 'load', initialize);


// ===============================================//
// ========== END GOOGLE MAP SETTINGS ==========//
// ===============================================//