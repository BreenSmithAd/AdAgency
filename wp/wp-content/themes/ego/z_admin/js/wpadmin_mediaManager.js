/*
	for wpadmin_mediaManager
*/

jQuery(document).ready(function(){
	// removes gallery-settings in the Gallery tab of the Gallery Media Management meta box
	jQuery("div#gallery-settings").empty();
	
	// Click to sort message added
	jQuery("div#sort-buttons").append("Click to sort");
	
	// for modifying the behavior of the sort links
	// click to sort, save and reload.
	jQuery("a#asc, a#desc").click(function(e){
		jQuery("input#save-all").trigger("click");
	});
	
	// Force open the Gallery Media Management meta box when the page is loaded
	jQuery("div#portfolio_media").removeClass("closed");
	
	// changing the label
	var originalGalleryLabel = jQuery('li#tab-gallery a').html();
	if(originalGalleryLabel) jQuery('li#tab-gallery a').html(originalGalleryLabel.replace(/Gallery/ig, 'Media'));
});