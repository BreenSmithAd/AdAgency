jQuery(document).ready(function($){

    $(".successMessage").hide();

    $("#contactForm").validate({
        submitHandler: function (form) {
        	var str = jQuery(form).serialize();
            jQuery.ajax({
            	type:"POST",
                url: jQuery("#contactForm").attr('action'),
                data: 'action=contact_form&'+str,
                success: function(msg) {
			        jQuery(".successMessage").ajaxComplete(function(event, request, settings){
			                if(msg) {

                                jQuery(".contact-area .successMessage").html(msg);

                                $("#contactForm").hide(0, function () {

                                    $(".successMessage").css("text-indent", 0).fadeIn("slow").delay(2E3).fadeOut("slow", function () {
                                        $("#contactForm").fadeIn("slow");
                                        $("#contactForm input[name='email']").val("Enter email here.")
                                    });

                                 });

			       		    }
			        });

			        }
            });
            

        }
    });
	

});