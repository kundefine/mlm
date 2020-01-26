"use strict";


function gMapHome () {
	if ($('.google-map-home').length) {
		$('.google-map-home').each(function () {
			// getting options from html 
			var Self = $(this);
			var mapName = Self.attr('id');
			var mapLat = Self.data('map-lat');
			var mapLng = Self.data('map-lng');
			var iconPath = Self.data('icon-path');
			var mapZoom = Self.data('map-zoom');
			var mapTitle = Self.data('map-title');


			var styles = [
						    {
						        "featureType": "administrative",
						        "elementType": "labels.text.fill",
						        "stylers": [
						            {
						                "color": "#444444"
						            }
						        ]
						    },
						    {
						        "featureType": "landscape",
						        "elementType": "all",
						        "stylers": [
						            {
						                "color": "#f2f2f2"
						            }
						        ]
						    },
						    {
						        "featureType": "poi",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "road",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": -100
						            },
						            {
						                "lightness": 45
						            }
						        ]
						    },
						    {
						        "featureType": "road.highway",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "simplified"
						            }
						        ]
						    },
						    {
						        "featureType": "road.arterial",
						        "elementType": "labels.icon",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "transit",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "water",
						        "elementType": "all",
						        "stylers": [
						            {
						                "color": "#cbf0ff"
						            },
						            {
						                "visibility": "on"
						            }
						        ]
						    }
						];


			// if zoom not defined the zoom value will be 15;
			if (!mapZoom) {
				var mapZoom = 12;
			};
			// init map
			var map;
			map = new GMaps({
			    div: '#'+mapName,
			    scrollwheel: false,
			    lat: mapLat,
			    lng: mapLng,
			    styles: styles,
			    zoom: mapZoom
			});
			// if icon path setted then show marker
			
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.8271981,
			      	lng: 90.3556723,
			      	title: 'Rupayan City Uttara',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
				
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.8362495,
			      	lng: 90.3759678,
			      	title: 'Rupayan Shopping Square',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
				
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.8226176,
			      	lng: 90.3728037,
			      	title: 'Rupayan Housing Estate Ltd',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.8213544,
			      	lng: 90.3939137,
			      	title: 'Rupayan Golden Age',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.8620561,
			      	lng: 90.3807454,
			      	title: 'Rupayan Group',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.780606,
			      	lng: 90.4035023,
			      	title: 'Rupayan Group',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
				
				map.addMarker({
			    	icon: 'images/backgroung/marker-3.png',
			    	lat: 23.745803,
			      	lng: 90.3930153,
			      	title: 'Rupayan Group',
			      	infoWindow: {
						content: '<h4>Rupayan Center </h4><p> 72, Mohakhali C.A, Dhaka 1212</p>'
					}
				});
			
		});  
	};
}


// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
		// add your functions
		gMapHome();
	})(jQuery);
});