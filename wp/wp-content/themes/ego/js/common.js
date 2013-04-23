/*-------------------------------------------------------------------------

	Theme Name: EGO
	
	For any questions concerning this theme please refer to documention or
	our forum at support.udthemes.com.

/*------------------------------------------------------------------------

//GENERAL FUNCTONS ///////////////////////////////////////////////////////

-------------------------------------------------------------------------*/

jQuery(document).ready(function($){
	
	/*vars used throughout*/
	var thumb = $('.thumb, .round-thumb-container'),
		thumbW,
		thumbH,
		thumbCaption,
		target,
		hoverSpeed=500,
		hoverEase='easeOutExpo',
		targetNetwork =$('ul.socialSmall li a'),
		toggleMenu =$('.mobileMenuToggle'),
		lightboxTransition = 'fade',				//Set lightbox transition type
		overlayOpacity =0.8,						//Fancybox overlay opacity
		overlayColor = '#000',						//Fancybox overlay color	
		videoWidth = 680,							//Fancybox video width
		videoHeight = 382,							//Fancybox video height
		hoverScreen;

	
	//MOBILE MENU -----------------------------------------------------------------------/
	
	toggleMenu.on('click', function(event) {
		if($(this).parent().find('.menu ul').is(':hidden')) {
			$(this).parent().find('.menu ul').slideDown();
			$(this).addClass('open');
		} else {
			$(this).parent().find('.menu ul').slideUp();
			$(this).removeClass('open');
		}
		event.preventDefault();
	});
	
	//VIDEO RESIZE -------------------------------------------------------------------------/
	
	var resizeVideos = function() {
		$('.video').not('.project-display .video').each(function() {
			$(this).height(($(this).width()/1.775)+'px');
			$(this).find('embed, object, iframe').height(($(this).width()/1.775)+'px').width($(this).width()+'px');
		});
	};
	
	$(window).bind('resize', function() {
		resizeVideos();
	});
	
	resizeVideos();
	
	//ROLLOVER SPECIFIC ---------------------------------------------------------------------/
	
	/*general
	-------------------*/
	
	thumb.not('.no_overlay').on({
		mouseenter: function () {
			//check if device is mobile 
			//or within an inactive filter category
			//or if its video content in which case do nothing
			if(isMobile === true) {
				return false;
			}
			 
			thumbW = $(this).find('a').find('img').width();
			thumbH = $(this).find('a').find('img').height();
			
			//get refrences needed
			thumbCaption = $(this).find('a').attr('title');
			
			//add rolloverscreen
			if(!$(this).find('a').find('div').hasClass('thumb-rollover')) {
				$(this).find('a.lightbox, a.lightbox-iframe, a.imageWrapperLink').append('<div class="thumb-rollover"></div>');
			}
			
			//set it to the image size and fade in
			hoverScreen = $('.thumb-rollover');
			hoverScreen.css({width:thumbW,height:thumbH});
			
			//make sure caption is filled out
			if (typeof thumbCaption !== 'undefined' && thumbCaption !== false && $(this).find(hoverScreen).is(':empty')) {
				//construct rollover & animate
				$(this).find(hoverScreen).append('<div class="thumbInfo">'+thumbCaption+'</div>');
				target = $(this).find(hoverScreen);
				target.stop().animate({opacity:1},hoverSpeed, hoverEase);
			}
		},		
		mouseleave: function () {
			if(isMobile === true) {
				return false;
			}
			//animate out
			$(this).find(hoverScreen).animate({opacity:0},hoverSpeed,hoverEase,function(){
				//delete rollover
				$(this).remove();
			});
		}
	});
	
	//LIGHTBOX SPECIFIC ---------------------------------------------------------------------/

	/*lightbox-img
	-------------------------------*/
	
	$('a.lightbox').fancybox({
		'transitionIn'		: lightboxTransition,
		'transitionOut'		: lightboxTransition,
		'titlePosition'		: 'over',
		'padding'			: '0',
		'overlayOpacity'    : overlayOpacity,
		'overlayColor'      : overlayColor,
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			
			var obj = currentArray[ currentIndex ];	//get current image
			var target = $(obj).parent();			//get its container
			
			//CASE 1: thumb has associated html content
			if($(target).next().hasClass('fancybox-html')) {
				//check if stack order should be displayed
				if ($(target).next().length && $(obj).attr('rel')){
					return '<div id="fancybox-title-over">' + '<div class="fancybox-num"> Image:'+(currentIndex + 1) + ' / ' + currentArray.length+'</div>'+($(target).next().html()) + '</div>';
				} else {
					return '<div id="fancybox-title-over">' + ($(target).next().html()) + '</div>';
				}
				
			//CASE 2:  thumb is a part of a group and has a title only
			} else if($(obj).attr('rel') && $(obj).attr('title')) {
				return '<div id="fancybox-title-over">' + '<div class="fancybox-num"> Image:'+ (currentIndex + 1) + ' / ' + currentArray.length + '</div> '+ (title.length?''+title:'') + '</div>';
			
			//CASE 3: thumb has no info but belongs to group
			} else if($(obj).attr('rel')) {
				return '<div id="fancybox-title-over">' + '<div class="fancybox-num" style="margin-bottom:0px"> Image:'+(currentIndex + 1) + ' / ' + currentArray.length+'</div>'+'</div>';
				
			//CASE 4: thumb has a title only
			} else if($(obj).attr('title')) {
				
				//if image is not associated with group, hide image numbering
				return '<div id="fancybox-title-over">' +(title.length ?''+title :'') + '</div>';
				
			//CASE 5: no info & does not belong to group
			} else {
				// hide title overlay
				$('#fancybox-title-over').hide();
			}
		},
		//animate image info on complete
		'onComplete':function(){
			$('#fancybox-title-over').hide().fadeIn('slow');
		}
	});
	
	/*lightbox-img
	-------------------------------*/
	
	$('a.lightbox-iframe').fancybox({
		'transitionIn'		: lightboxTransition,
		'transitionOut'		: lightboxTransition,
		'padding'			: '0',
		'titlePosition'		: 'outside',
		'width'				: videoWidth,
		'height'			: videoHeight,
		'overlayOpacity'	: overlayOpacity,
		'overlayColor'		: overlayColor,
		'autoscale'			: false,
		'type'				: 'iframe',
		'swf'				: {
		'wmode'				: 'transparent',
		'allowfullscreen'	: 'true'},
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			var obj = currentArray[ currentIndex ];	//get current image
			var target = $(obj).parent();			//get its container
			if($(target).next().hasClass('fancybox-html')) {
				return '<div>' + ($(target).next().html()) + '</div>';
			}
		},
		
		//animate image info on complete
		'onComplete':function(){
			//check for smallest breakpoints
			if($(window).width()<=767){
				$('.fancybox-title-outside').css({display:'none'});
			} else {
				$('.fancybox-title-outside').hide().fadeIn('slow');
			}
		}
	});
});

/* SCRIPT FOR COMMENT FORM */
jQuery(document).ready(function($) {
	var commentFormDefaults=new Array();
	commentFormDefaults['author']=udt_global_vars.commentFormDefaults_author;
	commentFormDefaults['email']=udt_global_vars.commentFormDefaults_email;
	commentFormDefaults['url']=udt_global_vars.commentFormDefaults_url;
	
	$('#commentform input[type="text"]').focus(function() {
		$(this).addClass('inputHighlight');
		if($(this).val()==commentFormDefaults[$(this).attr('id')]) {
			$(this).val('');
		}
	});
	$('#commentform input[type="text"]').blur(function() {
		$(this).removeClass('inputHighlight');
		if($(this).val()=='') {
			$(this).val(commentFormDefaults[$(this).attr('id')]);
		}
	});
	
	$('#commentform textarea').focus(function() {
		$(this).addClass('inputHighlight');
	});
	$('#commentform textarea').blur(function() {
		$(this).removeClass('inputHighlight');
	});
	
	$('#commentform input[type="text"], #commentform textarea').hover(function() {
			$(this).addClass('inputHighlight');
		},
		function() {	
			$(this).not(':focus').removeClass('inputHighlight');
		}
	);
	
});

/* SCRIPT FOR COMMENT FORM */
jQuery(document).ready(function($) {
	var searchFormDefaults=new Array();
	searchFormDefaults['s']=udt_global_vars.searchFormDefaults_search;
	
	$('#searchform input[type="text"]').focus(function() {
		$(this).addClass('inputHighlight');
		if($(this).val()==searchFormDefaults[$(this).attr('id')]) {
			$(this).val('');
		}
	});
	$('#searchform input[type="text"]').blur(function() {
		$(this).removeClass('inputHighlight');
		if($(this).val()=='') {
			$(this).val(searchFormDefaults[$(this).attr('id')]);
		}
	});
	
	$('#searchform input[type="text"]').hover(function() {
			$(this).addClass('inputHighlight');
		},
		function() {	
			$(this).not(':focus').removeClass('inputHighlight');
		}
	);
});

/* Create select dropdown nav for responsive breakpoints */
jQuery(document).ready(function($) {
	// Create the dropdown base
	$("<select />").appendTo(".header .inner");
	
	// Create default option "Menu"
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Menu"
	}).appendTo(".header .inner select");
	
	// Populate dropdown with menu items
	$(".header .inner .menu a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo(".header .inner select");
	});
	
	$(".header .inner select").change(function() {
		window.location = $(this).find("option:selected").val();
	});

	if(isMobile && !isiPad) {
		$('.header .inner .menu ul').css({'display':'none'});
		$('.header .inner select').css({'display':'block'});
	} else {
		$('.header .inner select').css({'display':'none'});
	}

});