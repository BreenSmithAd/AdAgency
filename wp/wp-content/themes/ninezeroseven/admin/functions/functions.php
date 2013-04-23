<?php


global $data;

// Styling for the custom post type icon
add_action( 'admin_head', 'nzs_custom_type_icons' );
function nzs_custom_type_icons() {
    ?>
    <style type="text/css" media="screen">

	#icon-edit.icon32-posts-page-sections {background: url(<?php echo get_template_directory_uri(); ?>/admin/assets/images/icon-headers32.png) no-repeat;}
   	#icon-edit.icon32-posts-recent_works {background: url(<?php echo get_template_directory_uri(); ?>/admin/assets/images/icon-works32.png) no-repeat;}
   	#icon-edit.icon32-posts-one_page_portfolio {background: url(<?php echo get_template_directory_uri(); ?>/admin/assets/images/icon-portfolio32.png) no-repeat;}
   	#icon-edit.icon32-posts-team_members {background: url(<?php echo get_template_directory_uri(); ?>/admin/assets/images/icon-team32.png) no-repeat;}
   	#icon-edit.icon32-posts-parallax-sections {background: url(<?php echo get_template_directory_uri(); ?>/admin/assets/images/icon-parallax32.png) no-repeat;}

   	td input#nzs_parallax_size{width:60px !important;}

    </style>
<?php }

function ul_style_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter('mce_buttons_2', 'ul_style_buttons');

function ul_style_editor_options( $init_array ) {
    $style_formats = array(
        array(
            'title' => 'UL disc', 
            'selector' => 'ul', 
            'classes' => 'disc' 
        ),
        array(
            'title' => 'UL square', 
            'selector' => 'ul', 
            'classes' => 'square'
        )
        ,
        array(
            'title' => 'UL circle', 
            'selector' => 'ul', 
            'classes' => 'circle'
        )
    );
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'ul_style_editor_options' );

include( get_template_directory() . '/assets/php/install-plugins.php' );

?>