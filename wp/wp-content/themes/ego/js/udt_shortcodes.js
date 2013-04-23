/* accordions */
jQuery(document).ready(function($) {
	$('.accordion > dd').hide();
	$('.accordion > dt').css({'border-bottom-left-radius':'3px','border-bottom-right-radius':'3px','margin-bottom':'3px'});
	
	$('.accordion > dt > a').click(function() {
		$(this).parent().parent().children('dd').slideUp();
		$(this).parent().parent().children('dt').removeClass('active');
		$(this).parent().parent().children('dt').css({'border-bottom-left-radius':'3px','border-bottom-right-radius':'3px','margin-bottom':'3px'});
		$(this).parent().parent().children('dt').find('a span').html('+');
		$(this).parent().animate({'border-bottom-left-radius':'0','border-bottom-right-radius':'0','margin-bottom':'0'});
		$(this).parent().addClass('active');
		$(this).parent().next().slideDown();
		$(this).children('span').html('&ndash;');
		return false;
	});
	
});

/* tabs */
jQuery(document).ready(function($) {
	$('.tabs .tabs_content').hide();
	$('.tabs').each(function() {
		$(this).find('.tabs_content:first').show();
		$(this).find('.tabs_nav li:first').addClass('active');
		$(this).find('.tabs_nav li a').click(function() {
			$(this).parent().parent().children('li').removeClass('active');
			$(this).parent().addClass('active');
			$(this).parent().parent().parent().children('.tabs_content').hide();
			var currentTab = $(this).attr('data-label_ref');
			$(this).parent().parent().parent().children('.tabs_content').each(function() {
				if($(this).data('label_ref')==currentTab) { $(this).show(); }
			});
			return false;
		});
	});
});

/* pricing tables */
jQuery(document).ready(function($) {
	$(".pricing_table .pricing_table_col > ul > li:has(span.price), .pricing_table .pricing_table_col > ul > li:has(a.submit)").addClass("pricing_table_bg");
});

/* Google Maps */
jQuery(document).ready(function($) {
	function initializeMap() {
	
		jQuery('.map').each(function() {
		
			var map_id, map_lat, map_long, map_zoom, map_marker, map_info_title='', map_info_content='', m_controls=true;
			var map_data = $(this).metadata({type:'elem',name:'script'});
			
			if(udt_global_vars.map_controls=='0') {
				m_controls=false;
			}
			
			if($(this).attr('id')!='') {
				map_id=$(this).attr('id');
			}
			if(map_data.map_lat!='') {
				map_lat=map_data.map_lat;
			}
			if(map_data.map_long!='') {
				map_long=map_data.map_long;
			}
			if(map_data.map_zoom!='') {
				map_zoom=parseInt(map_data.map_zoom,10);
			}
			if(map_data.map_marker!='') {
				map_marker=map_data.map_marker;
			}
			if(map_data.map_info_title!='') {
				map_info_title=map_data.map_info_title;
			}
			if(map_data.map_info_content!='') {
				map_info_content=map_data.map_info_content;
			}
			
			var myLatlng = new google.maps.LatLng(map_lat, map_long);
			var myOptions = {
				zoom: map_zoom,
				center: myLatlng,
				mapTypeControl: m_controls,
				zoomControl: m_controls,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById(map_id),myOptions);
			
			if(map_marker=='custom') {
				var image = new google.maps.MarkerImage(udt_global_vars.map_image_marker,
					// This marker is 61 pixels wide by 72 pixels tall.
					new google.maps.Size(60, 72),
					// The origin for this image is 0,0.
					new google.maps.Point(0,0),
					// The anchor for this image is 50, 40. (center, bottom)
					new google.maps.Point(30, 72));
					
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					icon: image
				});
			} else {
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map
				});
			}
			
			if(map_info_title!='' || map_info_content!='') {
				var contentString = '<p style="margin-bottom:0px"><strong>'+map_info_title+'</strong></p><p>'+map_info_content+'</p>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map,marker);
				});
			}
			
		});
	}
	initializeMap();
});