/* iPad detection */
	if ((navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('iPod') != -1) || (navigator.userAgent.indexOf('iPad') != -1)) {
		var isIOS = true;
		// $('head').append('<link rel="stylesheet" href="css/style_ipad.css" type="text/css" />');
		// if(isIOS) alert('you must be using iPad or iPhone.');
	}

jQuery(document).ready(function(){
	//CUFON------------------------------------------------------------------------------/
	// We no longer use cufon in the Foundry
	/*
		Cufon.replace('h1,h2,h3,h4,h5,h6', { fontFamily: 'Bebas Neue' });			//set primary font
	*/

	//VARIABLES -------------------------------------------------------------------------/

	var navTarget = "ul#nav li a";	//menu link to target
	var activeNavItem; //stores id of clicked menu item
	var contentHolder = "#content-wrapper"; //specify gobal content holder

	//encode.js setting----- /
	Encoder.EncodeType = "entity";

	//INITIALIZE -------------------------------------------------------------------------/

	// Subsection Tabs
	jQuery('.tab_button').tabs();

	// iOS style toggle switch
	jQuery('.toggleSwitch').iphoneStyle({
		disabledClass: 'toggleCheckDisabled',
		containerClass: 'toggleCheckContainer',
		labelOnClass: 'toggleCheckLabelOn',
		labelOffClass: 'toggleCheckLabelOff',
		handleClass: 'toggleCheckHandle',
		handleCenterClass: 'toggleCheckHandleCenter',
		handleRightClass: 'toggleCheckHandleRight',
		onChange: function(elem, value) {
			elem.parent().parent().parent().find('.thisIsSaveCheckbox').trigger('click');
			}
        });

	//MAIN TAB NAVIGATION-----------------------------------------------------------------/

	// Work around for a WP bug (collapse menu)
	jQuery('#collapse-menu').click(function() {
		jQuery('div#navContainer').hide().fadeIn('fast');
	});

	//TEXT TRUNCATE PLUGIN

	jQuery(function(){
	 jQuery('.dashboardMessage').truncatable({	limit: 400, more: 'more', less: true, hideText: 'less' });
	});

	//SET SECTION ITEM IDs

	 jQuery(navTarget).each(function(i){
		i++
   		this.id = this.id +"_" +i ;
	 });


	 //SET CONTENT ITEM IDs

	 jQuery(contentHolder).children('.content').each(function(i){
		i++
   		this.id = this.id + "page" +"_" + i;
	 });


	 //HIDE CONTNET & SHOW SECTION1
	 jQuery(contentHolder).children('.content').hide();
	 jQuery(contentHolder).children('#page_1').show();


	//SET PAGE TO LOAD

	jQuery('#_'+startPage).addClass('active');
	jQuery('#_'+startPage).parent().addClass('active');



	//MENU CLICK FUNCTION

	 jQuery(navTarget).click(function() {

		//ensure link isnt clickable when active
		if (jQuery(this).hasClass('active')) return false;

		//get id of clicked item
		activeNavItem = jQuery(this).attr('id');

		//call the page switch function
		switchContent();

	});

	// Menu for udthemes square
	  jQuery("#foundry_box").click(function() {
	  	//get previously active link
		var PrevLink = jQuery(navTarget+'.active')

		//remove the active class from previous link
		jQuery(PrevLink).removeClass('active');

		// remove active
		jQuery(navTarget).parent().removeClass('active');

		//get id of previous link
		var PrevId = jQuery(PrevLink).attr('id');

		//set the current id
		var NextId = 'page_foundry_box';

		//get id of clicked item
		// activeNavItem = jQuery(this).attr('id');

		// dashboardMessage
		jQuery('p.dashboardMessage').html(jQuery(this).attr('alt'));

		//set markers for pages
		var prevPage = jQuery("#content-wrapper").children("#page"+PrevId);
		var nextPage = jQuery("#content-wrapper").children("."+NextId);

		jQuery(prevPage).css({opacity:1});
		jQuery(nextPage).css({opacity:0});

		//fade out previous + call things once done
		jQuery(prevPage).stop().animate({opacity:0},pageFadeSpeed, function(){

			//animation done, hide previous page
			jQuery(this).hide();

			//show the next page
			jQuery(nextPage).show();

			//fade it in
			jQuery(nextPage).animate({opacity:1},pageFadeSpeed, function(){

				//call back

			});

		})

	});

	 //CONTENT SWTICH FUNCTION

	 var switchContent = function (){
		 	jQuery('.page_foundry_box').fadeOut();

			//get previously active link
			var PrevLink = jQuery(navTarget+'.active')

			//remove the active class from previous link
			jQuery(PrevLink).removeClass('active');

			//remove active background from parent
			jQuery(PrevLink).parent().removeClass('active');

			//get id of previous link
			var PrevId = jQuery(PrevLink).attr('id');

			//set the clicked link to active
			var NextLink = jQuery('#'+activeNavItem).addClass('active');

			//set the current id
			var NextId = activeNavItem
			//add the active background to its parent
			jQuery(NextLink).parent().addClass('active');
			// dashboardMessage
			jQuery('p.dashboardMessage').html(jQuery(NextLink).attr('alt'));

			//set markers for pages
			var prevPage = jQuery("#content-wrapper").children("#page"+PrevId);
			var nextPage = jQuery("#content-wrapper").children("#page"+NextId);
			if(!prevPage.attr('id')) prevPage = jQuery("#content-wrapper").find(".page_foundry_box");
			jQuery(prevPage).css({opacity:1});
			jQuery(nextPage).css({opacity:0});

			//fade out previous + call things once done
			jQuery(prevPage).stop().animate({opacity:0},pageFadeSpeed, function(){

				//animation done, hide previous page
				jQuery(this).hide();

				//show the next page
				jQuery(nextPage).show();

				//fade it in
				jQuery(nextPage).animate({opacity:1},pageFadeSpeed, function(){

					//call back

				});

			});

	};

	//DASHBOARD ICONS-----------------------------------------------------------------/

	jQuery(".db_icon").hover(
			function() {
				jQuery(this).children('span').children('._rollover').animate({"opacity": "1"}, hoverFadeSpeed);
				jQuery(this).children('span').children('._original').animate({"opacity": "0"}, hoverFadeSpeed);
		},
			function() {
				jQuery(this).children('span').children('._rollover').animate({"opacity": "0"}, hoverFadeSpeed);
				jQuery(this).children('span').children('._original').animate({"opacity": "1"}, hoverFadeSpeed);
		});


	//BREADCRUM ---------------------------------------------------------------------/


	jQuery('.crum').hover(
			function() {

				if(jQuery(this).children('.path').hasClass('selected')) return false;

				jQuery(this).children('.path').addClass('active');
				jQuery(this).children('.tip').addClass('active');

		},
			function() {

				if(jQuery(this).children('.path').hasClass('selected')) return false;

				jQuery(this).children('.path').removeClass('active');
				jQuery(this).children('.tip').removeClass('active');

	});



	if ((navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('iPod') != -1) || (navigator.userAgent.indexOf('iPad') != -1)) {
				//call iPad iPhone specific styles or js
	}
});

