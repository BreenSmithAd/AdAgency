jQuery(document).ready(function () {



    var section = jQuery('#nzs_portfolio_type').val();

    if('image' === section){
        jQuery('tr#nzs_video_link').hide();
    }else if('video' === section){
        jQuery('tr#nzs_image_fields').hide();
    }

    jQuery('#nzs_portfolio_type').change(function(){
        var sectiond = jQuery('#nzs_portfolio_type').val();

        if('image' === sectiond){
            jQuery('tr#nzs_video_link').hide();
            jQuery('tr#nzs_image_fields').show();
        }else if('video' === sectiond){
            jQuery('tr#nzs_image_fields').hide();
            jQuery('tr#nzs_video_link').show();
        }

    });


    jQuery('#nzs_section_bg_image_button, #nzs_parallax_bg_image_button').click(function () {

        window.send_to_editor = function (html) {
            imgurl = jQuery('img', html).attr('src');
            jQuery('#nzs_section_bg_image , #nzs_parallax_bg_image').val(imgurl);


            tb_remove();
        }


        tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
        return false;

    });


    jQuery('#image-holder a').live('click',function(event){

        event.preventDefault();
        jQuery(this).parent().remove();

        return false;

    });



     jQuery('#nzs_portfolio_gallery, #nzs_post_slider').click(function () {

        var backup = window.send_to_editor;

        window.send_to_editor = function (html) {
            imgurl = jQuery('img', html).attr('src');

            var thumbSize = imgurl.match(/\.(jpg|jpeg)$/i);

            var imgSize = imgurl.match(/-(\d+)x(\d+)\.(jpg|jpeg)$/i);
            
            var imgID = html.match(/wp-image-(\d+)/);




            if(imgSize){
                imgurl = imgurl.replace(imgSize[0],'.'+imgSize[3]);
            }

            var thumbNail = imgurl.replace(thumbSize[0],'-150x150'+thumbSize[0]);

                

            if(thumbNail && imgID[1]){
               jQuery('#image-holder').append('<li style="float:left;margin-right:4px;text-align:center;"><input type="hidden" name="nzs_image_fields[]" value="'+imgID[1]+'" /><img style="padding:3px;background-color:#fff;box-shadow:1px 1px 3px #d8d8d8;" width="150" height="150" class="thumbnail" src="'+thumbNail+'" /><br/><a href="#" class="remove-image">remove</a></li>');
            }

           console.log(html);
            tb_remove('');
            window.send_to_editor = backup;
        }

        var crURL = jQuery('#set-post-thumbnail').attr('href');

        if('undefinded' != crURL){
            tb_show('', crURL);

        }else{
            tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
        }

       

        return false;

    });


    jQuery('input.browse.img.button').click(function () {
            // var _input = jQuery(this).parent().children('input[type=text]');
            // window.send_to_editor = function (html) {
            //     imgurl = jQuery('img', html).attr('src');
            //     _input.val(imgurl);
            //     tb_remove();
            // }


            // tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
            // return false;

    });

});