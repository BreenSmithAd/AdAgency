<?php
/**
 * Ego functions and definitions
 *
 * You're better off not touching anything here unless you know what you're doing
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */

// Include The Foundry Theme Options Panel
include_once (get_template_directory(). '/foundry-functions.php');

// Add theme CSS files
function load_udt_styles() {
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', false, false, 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox-1.3.4.css', false, false, 'all');
	wp_enqueue_style('udt_style', get_template_directory_uri() . '/css/style.css', false, false, 'all');
	wp_enqueue_style('epicslider', get_template_directory_uri() . '/css/epicslider.css', false, false, 'all');
	wp_enqueue_style('udt_shortcodes', get_template_directory_uri() . '/css/udt_shortcodes.css', false, false, 'all');
	wp_enqueue_style('udt-custom-content', home_url() . '/?udt-custom-content=css', array('udt_style','epicslider','udt_shortcodes'), false, 'all');
	wp_enqueue_style('udt_media_queries', get_template_directory_uri() . '/css/udt_media_queries.css', array('udt_style','epicslider','udt_shortcodes','udt-custom-content'), false, 'all');
}

// Add theme JS files
function load_udt_scripts() {
	wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js', array('jquery'), false, true);
	wp_enqueue_script('mobile-touch-swipe', get_template_directory_uri() . '/js/jquery.mobile-touch-swipe-1.0.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('ios-timer', get_template_directory_uri() . '/js/iOS-timer.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), false, true);
	wp_enqueue_script('epicslider', get_template_directory_uri() . '/js/jquery.epicslider.js', array('jquery','jquery-ui','mobile-touch-swipe'), false, true);
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery','jquery-ui','mobile-touch-swipe'), false, true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array('jquery','jquery-ui'), false, true);
	if(is_front_page() && is_page()) {
		wp_enqueue_script('ajaxloading', get_template_directory_uri() . '/js/jquery.ajaxloading.js', array('jquery','jquery-ui'), false, true);
		wp_enqueue_script('onepage', get_template_directory_uri() . '/js/onepage.js', array('jquery','jquery-ui'), false, true);
	}
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox-1.3.4.pack.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('metadata', get_template_directory_uri() . '/js/jquery.metadata.js', array('jquery'), false, true);
	wp_enqueue_script('tweet', get_template_directory_uri() . '/js/jquery.tweet.js', array('jquery'), false, true);
	wp_enqueue_script('tweet-config', get_template_directory_uri() . '/js/jquery.tweet-config.js', array('jquery','tweet','metadata'), false, true);
	wp_enqueue_script('ego-common', get_template_directory_uri() . '/js/common.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('shortcodes', get_template_directory_uri() . '/js/udt_shortcodes.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact.js', array('jquery','jquery-ui'), false, true);
	wp_enqueue_script('gmaps', 'http://maps.googleapis.com/maps/api/js?sensor=false', array('jquery','jquery-ui'), false, true);
	
	wp_localize_script( 'ego-common', 'udt_global_vars', array( 
		'template_dir' => get_template_directory_uri().'/',
		'scroll_speed' => returnOptionValue('page_scroll_duration'),
		'contact_form_required_fields_label_ajax' => returnOptionValue('contact_form_required_fields_label_ajax'),
		'contact_form_warning' => returnOptionValue('contact_form_warning'),
		'contact_form_email_warning' => returnOptionValue('contact_form_email_warning'),
		'contact_form_error' => returnOptionValue('contact_form_error'),
		'contact_form_success_message' => returnOptionValue('contact_form_success_message'),
		'contactFormDefaults_name' => __('Name', 'ego'),
		'contactFormDefaults_email' => __('E-mail', 'ego'),
		'contactFormDefaults_subject' => __('Subject', 'ego'),
		'contactFormDefaults_message' => __('Message', 'ego'),
		'commentFormDefaults_author' => __('Name', 'ego'),
		'commentFormDefaults_email' => __('E-mail', 'ego'),
		'commentFormDefaults_url' => __('http://', 'ego'),
		'searchFormDefaults_search' => __('Search', 'ego'),
		'epic_slideshow' => returnOptionValue('epic_slideshow'),
		'epic_autoplay' => returnOptionValue('epic_autoplay'),
		'epic_slide_timer' => returnOptionValue('epic_slide_timer'),
		'epic_slide_animation_speed' => returnOptionValue('epic_slide_animation_speed'),
		'epic_slide_animation' => returnOptionValue('epic_slide_animation'),
		'epic_mobile_slide_animation' => returnOptionValue('epic_mobile_slide_animation'),
		'epic_easing' => returnOptionValue('epic_easing'),
		'flexslider_autoplay' => returnOptionValue('flexslider_autoplay'),
		'flexslider_slide_timer' => returnOptionValue('flexslider_slide_timer'),
		'flexslider_slide_animation_speed' => returnOptionValue('flexslider_slide_animation_speed'),
		'map_controls' => returnOptionValue('map_controls'),
		'map_image_marker' => returnUploadedImageByID('map_marker'),
	) );
}
if(!is_admin()) {
	if (function_exists('load_udt_styles')) {
		add_action('wp_enqueue_scripts', 'load_udt_styles');
	}
	if (function_exists('load_udt_scripts')) {
		add_action('wp_enqueue_scripts', 'load_udt_scripts');
	}
}

if ( ! isset( $content_width ) ) $content_width = 600;

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'ego', get_template_directory() . '/languages' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'ego' ),
));

// Add support for Featured Image in blog posts and pages
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 600, 338, true );
}

// Add various image sizes required by Ego
if (function_exists('add_image_size')) {
	add_image_size( 'udt-full-width-image', 930, 524, true );
	add_image_size( 'udt-page-image', 680, 383, true );
	add_image_size( 'udt-portfolio-thumb', 195, 195, true );
}

// Read more should link to top of page
function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

// Widget support
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'blog-sidebar',
		'name' => 'Blog Sidebar',
		'description' => 'This sidebar is used in the blog section. ***For shortcodes, images, maps etc. you MUST set the width to max 240px.***',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'  => '</h4>',
	));
	register_sidebar(array(
		'id' => 'page-sidebar',
		'name' => 'Page Sidebar',
		'description' => 'This sidebar is used in pages. ***For shortcodes, images, maps etc. you MUST set the width to max 240px.***',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'  => '</h4>',
	));
	register_sidebar(array(
		'id' => 'contact-sidebar',
		'name' => 'Contact Page Sidebar',
		'description' => 'This sidebar is used in the contact page. ***For shortcodes, images, maps etc. you MUST set the width to max 240px.***',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'  => '</h4>',
	));
}

// Add custom fields to media uploader for pages, posts & portfolios
function page_attachment_fields_to_edit($form_fields, $post) {
	if(get_post_type($post->post_parent)=='page' || get_post_type($post->post_parent)=='post' || get_post_type($post->post_parent)=='udt_portfolio') {		
		$form_fields["udt_slide_display_opt"]["label"] = __("<abbr title='Display Options'>Display Opt...</abbr>", 'ego');
		$form_fields["udt_slide_display_opt"]["input"] = "html";
		$form_fields["udt_slide_display_opt"]["html"] = "
		<select name='attachments[{$post->ID}][udt_slide_display_opt]' id='attachments[{$post->ID}][udt_slide_display_opt]' style='width:100%;'>
			<option value='none'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='none'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Default</option>
			<option value='slider'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='slider'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Display in Featured Slider</option>
			<option value='video-youtube'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='video-youtube'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Display Featured Video (Youtube)</option>
			<option value='video-vimeo'";
			if(get_post_meta($post->ID, "_udt_slide_display_opt", true)=='video-vimeo'){ $form_fields["udt_slide_display_opt"]["html"] .="selected='selected'"; }
			$form_fields["udt_slide_display_opt"]["html"] .=">Display Featured Video (Vimeo)</option>
		</select>";
		$form_fields["udt_slide_display_opt"]["helps"] = "Select how to display this image.";
		
		$form_fields["udt_slide_link_url"]["label"] = __("<abbr title='Slide Link URL'>Slide Link U...</abbr>", 'ego');
		$form_fields["udt_slide_link_url"]["value"] = get_post_meta($post->ID, "_udt_slide_link_url", true);
		$form_fields["udt_slide_link_url"]["helps"] = "If Display Option is set to Display in Slider and you want this entire slide to be a link, enter the link URL here.";
		
		$form_fields["udt_slide_video_url"]["label"] = __("Video URL", 'ego');
		$form_fields["udt_slide_video_url"]["value"] = get_post_meta($post->ID, "_udt_slide_video_url", true);
		$form_fields["udt_slide_video_url"]["helps"] = "If Display Option is set to Display Featured Video, enter Youtube / Vimeo video ID here.";
	}
	return $form_fields;
}
add_filter("attachment_fields_to_edit", "page_attachment_fields_to_edit", null, 2);

// Save custom fields for media uploader in pages, posts & portfolios
function page_gallery_attachment_fields_to_save($post, $attachment) {
	if(get_post_type($post['post_parent'])=='page' || get_post_type($post['post_parent'])=='post' || get_post_type($post['post_parent'])=='udt_portfolio') {
		if($attachment['udt_slide_display_opt']=='video-youtube' || $attachment['udt_slide_display_opt']=='video-vimeo'){
			if( trim($attachment['udt_slide_video_url']) == '' ){
				// adding our custom error
				$post['errors']['udt_slide_display_opt']['errors'][] = '';
				$post['errors']['udt_slide_video_url']['errors'][] = __('ERROR: Video URL must be set!', 'ego');
			} else {
				update_post_meta($post['ID'], '_udt_slide_video_url', $attachment['udt_slide_video_url']);
			}
		} else {
			update_post_meta($post['ID'], '_udt_slide_video_url', $attachment['udt_slide_video_url']);
		}
		update_post_meta($post['ID'], '_udt_slide_display_opt', $attachment['udt_slide_display_opt']);
		update_post_meta($post['ID'], '_udt_slide_link_url', $attachment['udt_slide_link_url']);
	}
	return $post;
}
add_filter("attachment_fields_to_save", "page_gallery_attachment_fields_to_save", null, 2);

// Predefined custom fields for posts
$key_post = "_udt_post_meta";
$meta_boxes_post = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	),
	"display_media" => array(
		"name" => "display_media",
		"title" => "Blog Index Media Display Options",
		"description" => 'Select what type of featured media to display on the blog index for this post.'
	)
);

function create_post_meta_box() {
	global $key_post;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', __('Post Options','ego'), 'display_post_meta_box', 'post', 'normal', 'high');
	}
}

function display_post_meta_box() {
	global $post, $meta_boxes_post, $key_post;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key_post . '_wpnonce', false, true );
		foreach($meta_boxes_post as $meta_box) {
			$data = get_post_meta($post->ID, $key_post, true);
			?>
			<?php if($meta_box[ 'name' ]=='display_title') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
			?>
			<?php if($meta_box[ 'name' ]=='display_media') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="featured-image" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'featured-image'); ?>>Featured Image</option>
						<option value="featured-media" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'featured-media'); ?>>Featured Slider/Video</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
		} ?>
	</div>
<?php
}

function save_post_meta_box( $post_id ) {
	global $post, $meta_boxes_post, $key_post;
	if(isset($post)) {
		foreach( $meta_boxes_post as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key_post . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key_post . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id ))
		return $post_id;
		update_post_meta( $post_id, $key_post, $data );
	}
}
add_action( 'admin_menu', 'create_post_meta_box' );
add_action( 'save_post', 'save_post_meta_box' );

// Predefined custom fields for pages
$key = "_udt_page_meta";
$meta_boxes = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	)
);

function create_page_meta_box() {
	global $key;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', __('Page Options','ego'), 'display_page_meta_box', 'page', 'normal', 'high');
	}
}

function display_page_meta_box() {
	global $post, $meta_boxes, $key;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );
		foreach($meta_boxes as $meta_box) {
			$data = get_post_meta($post->ID, $key, true);
			?>
			<?php if($meta_box[ 'name' ]=='display_title') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
		} ?>
	</div>
<?php
}

function save_page_meta_box( $post_id ) {
	global $post, $meta_boxes, $key;
	if(isset($post)) {
		foreach( $meta_boxes as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id ))
		return $post_id;
		update_post_meta( $post_id, $key, $data );
	}
}
add_action( 'admin_menu', 'create_page_meta_box' );
add_action( 'save_post', 'save_page_meta_box' );

// Custom post type for homepage slider
function create_homepage_slider_post_type() {
	register_post_type( 'udt_homepage_slider',
		array(
			'labels' => array(
				'name' => __( 'Homepage Slides', 'ego' ),
				'singular_name' => __( 'Homepage Slide', 'ego' ),
				'all_items' => __( 'All Homepage Slides', 'ego' ),
				'add_new_item' => __( 'Add New Homepage Slide', 'ego' ),
				'edit_item' => __( 'Edit Homepage Slide', 'ego' ),
				'new_item' => __( 'New Homepage Slide', 'ego' ),
				'view_item' => __( 'View Homepage Slide', 'ego' ),
				'search_items' => __( 'Search Homepage Slides', 'ego' ),
				'not_found' => __( 'No Homepage Slides found', 'ego' ),
				'not_found_in_trash' => __( 'No Homepage Slides found in Trash', 'ego' ),
				'menu_name' => __( 'Homep. Slides', 'ego' ),
			),
			'description' => 'Create Slides for the homepage full-screen slider.',
			'public' => false,
			'has_archive' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'hierarchical' => true,
			'supports' => array('title','editor','page-attributes','thumbnail','revisions'),
			'rewrite' => false
		)
	);
}
add_action( 'init', 'create_homepage_slider_post_type' );

// Predefined custom fields for Homepage Slides
$key_homepage_slide = "_udt_homepage_slide_meta";
$meta_boxes_homepage_slide = array(
	"caption_style" => array(
		"name" => "caption_style",
		"title" => "Caption Style",
		"description" => 'Select the caption style you would like to use with this slide.'
	)
);

function create_homepage_slide_meta_box() {
	global $key_homepage_slide;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', __('Slide Options','ego'), 'display_homepage_slide_meta_box', 'udt_homepage_slider', 'normal', 'high');
	}
}

function display_homepage_slide_meta_box() {
	global $post, $meta_boxes_homepage_slide, $key_homepage_slide;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key_homepage_slide . '_wpnonce', false, true );
		foreach($meta_boxes_homepage_slide as $meta_box) {
			$data = get_post_meta($post->ID, $key_homepage_slide, true);
			?>
			<?php if($meta_box[ 'name' ]=='caption_style') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="none" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'none'); ?>>None</option>
						<option value="logo" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'logo'); ?>>Logo</option>
						<option value="graphic" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'graphic'); ?>>Graphic</option>
						<option value="impact" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'impact'); ?>>Impact</option>
						<option value="striped-top-left" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'striped-top-left'); ?>>Striped Top Left</option>
						<option value="striped-top-right" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'striped-top-right'); ?>>Striped Top Right</option>
						<option value="striped-bottom-left" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'striped-bottom-left'); ?>>Striped Bottom Left</option>
						<option value="striped-bottom-right" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'striped-bottom-right'); ?>>Striped Bottom Right</option>
						<option value="boxed-top-left" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'boxed-top-left'); ?>>Boxed Top Left</option>
						<option value="boxed-top-right" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'boxed-top-right'); ?>>Boxed Top Right</option>
						<option value="boxed-bottom-left" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'boxed-bottom-left'); ?>>Boxed Bottom Left</option>
						<option value="boxed-bottom-right" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'boxed-bottom-right'); ?>>Boxed Bottom Right</option>
						<option value="elegant-top-left" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'elegant-top-left'); ?>>Elegant Top Left</option>
						<option value="elegant-top-right" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'elegant-top-right'); ?>>Elegant Top Right</option>
						<option value="elegant-bottom-left" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'elegant-bottom-left'); ?>>Elegant Bottom Left</option>
						<option value="elegant-bottom-right" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'elegant-bottom-right'); ?>>Elegant Bottom Right</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
		} ?>
	</div>
<?php
}

function save_homepage_slide_meta_box( $post_id ) {
	global $post, $meta_boxes_homepage_slide, $key_homepage_slide;
	if(isset($post)) {
		foreach( $meta_boxes_homepage_slide as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key_homepage_slide . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key_homepage_slide . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id ))
		return $post_id;
		update_post_meta( $post_id, $key_homepage_slide, $data );
	}
}
add_action( 'admin_menu', 'create_homepage_slide_meta_box' );
add_action( 'save_post', 'save_homepage_slide_meta_box' );

// Custom post type for homepage sections
function create_homepage_sections_post_type() {
	register_post_type( 'udt_homepage_secs',
		array(
			'labels' => array(
				'name' => __( 'Homepage Sections', 'ego' ),
				'singular_name' => __( 'Homepage Section', 'ego' ),
				'all_items' => __( 'All Homepage Sections', 'ego' ),
				'add_new_item' => __( 'Add New Homepage Section', 'ego' ),
				'edit_item' => __( 'Edit Homepage Section', 'ego' ),
				'new_item' => __( 'New Homepage Section', 'ego' ),
				'view_item' => __( 'View Homepage Section', 'ego' ),
				'search_items' => __( 'Search Homepage Sections', 'ego' ),
				'not_found' => __( 'No Homepage Sections found', 'ego' ),
				'not_found_in_trash' => __( 'No Homepage Sections found in Trash', 'ego' ),
				'menu_name' => __( 'Homep. Sections', 'ego' ),
			),
			'description' => 'Create Sections for the homepage.',
			'public' => false,
			'has_archive' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'hierarchical' => true,
			'supports' => array('title','editor','page-attributes','thumbnail','revisions'),
			'rewrite' => false
		)
	);
}
add_action( 'init', 'create_homepage_sections_post_type' );

// Predefined custom fields for Homepage Sections
$key_homepage_section = "_udt_homepage_section_meta";
$meta_boxes_homepage_section = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	),
	"teaser_content" => array(
		"name" => "teaser_content",
		"title" => "Teaser Area Content",
		"description" => 'The Parallax teaser area is activated by adding a Featured Image to this post. The Featured Image is then used as the Parallax background and any content for the area may be added here.'
	),
	"section_layout" => array(
		"name" => "section_layout",
		"title" => "Section Layout",
		"description" => 'Select a layout for this section.'
	)
);

function create_homepage_section_meta_box() {
	global $key_homepage_section;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', __('Section Options','ego'), 'display_homepage_section_meta_box', 'udt_homepage_secs', 'normal', 'high');
	}
}

function display_homepage_section_meta_box() {
	global $post, $meta_boxes_homepage_section, $key_homepage_section;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key_homepage_section . '_wpnonce', false, true );
		foreach($meta_boxes_homepage_section as $meta_box) {
			$data = get_post_meta($post->ID, $key_homepage_section, true);
			?>
			<?php if($meta_box[ 'name' ]=='display_title') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='teaser_content') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<textarea id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>"><?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?></textarea>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='section_layout') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="default" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'default'); ?>>Default</option>
						<option value="contact" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'contact'); ?>>Contact</option>
						<option value="portfolio" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'portfolio'); ?>>Portfolio</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php }
		} ?>
	</div>
<?php
}

function save_homepage_section_meta_box( $post_id ) {
	global $post, $meta_boxes_homepage_section, $key_homepage_section;
	if(isset($post)) {
		foreach( $meta_boxes_homepage_section as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key_homepage_section . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key_homepage_section . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id ))
		return $post_id;
		update_post_meta( $post_id, $key_homepage_section, $data );
	}
}
add_action( 'admin_menu', 'create_homepage_section_meta_box' );
add_action( 'save_post', 'save_homepage_section_meta_box' );

// Custom post type for portfolios
function create_portfolio_post_type() {
	register_post_type( 'udt_portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolios', 'ego' ),
				'singular_name' => __( 'Portfolio', 'ego' ),
				'all_items' => __( 'All Portfolios', 'ego' ),
				'add_new_item' => __( 'Add New Portfolio', 'ego' ),
				'edit_item' => __( 'Edit Portfolio', 'ego' ),
				'new_item' => __( 'New Portfolio', 'ego' ),
				'view_item' => __( 'View Portfolio', 'ego' ),
				'search_items' => __( 'Search Portfolios', 'ego' ),
				'not_found' => __( 'No Portfolios found', 'ego' ),
				'not_found_in_trash' => __( 'No Portfolios found in Trash', 'ego' ),
			),
			'description' => 'Each page represents a project.',
			'public' => true,
			'has_archive' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'hierarchical' => false,
			'supports' => array('title','editor','page-attributes','thumbnail','revisions'),
			'rewrite' => array('slug'=>'portfolio','with_front'=>false),
		)
	);
}
add_action( 'init', 'create_portfolio_post_type' );

// Predefined custom fields for custom Portfolio post type
$key_portfolio = "_udt_portfolio_meta";
$meta_boxes_portfolio = array(
	"display_title" => array(
		"name" => "display_title",
		"title" => "Display Title",
		"description" => 'This field can be used to add a title with &lt;span&gt; tags within, enabling title font and color variations.'
	),
	"page_layout" => array(
		"name" => "page_layout",
		"title" => "Page Layout",
		"description" => 'Select the layout you would like to use for this project. If you select "Without Featured Media", the Featured Image is still required for the portfolio index thumbnail.'
	)
);

function create_portfolio_meta_box() {
	global $key_portfolio; 
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'portfolio-meta-boxes', __('Portfolio Options','ego'), 'display_portfolio_meta_box', 'udt_portfolio', 'normal', 'high' );
	}
}

function display_portfolio_meta_box() {
	global $post, $meta_boxes_portfolio, $key_portfolio;
	?>
	<div class="form-wrap">
		<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key_portfolio . '_wpnonce', false, true );
		foreach($meta_boxes_portfolio as $meta_box) {
			$data = get_post_meta($post->ID, $key_portfolio, true);
			?>
			<?php if($meta_box[ 'name' ]=='display_title') { ?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<input type="text" id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php if(isset($data[ $meta_box[ 'name' ] ])) { echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); } ?>" />
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } else if($meta_box[ 'name' ]=='page_layout') {?>
				<div class="form-field">
					<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
					<select id="<?php echo $meta_box[ 'name' ]; ?>" name="<?php echo $meta_box[ 'name' ]; ?>" style="min-width:200px;">
						<option value="default" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'default'); ?>>Default</option>
						<option value="full-width" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'full-width'); ?>>Full-width</option>
						<option value="without-featured-media" <?php if(isset($data[$meta_box['name']])) selected($data[$meta_box['name']],'without-featured-media'); ?>>Without Featured Media</option>
					</select>
					<p><?php echo $meta_box[ 'description' ]; ?></p>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
<?php
}

function save_portfolio_meta_box( $post_id ) {
	global $post, $meta_boxes_portfolio, $key_portfolio;
	if(isset($post)) {
		foreach( $meta_boxes_portfolio as $meta_box ) {
			if(isset($_POST[ $meta_box[ 'name' ] ])) {
				$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
			}
		}
		if(isset($_POST[ $key_portfolio . '_wpnonce' ])) {
			if ( !wp_verify_nonce( $_POST[ $key_portfolio . '_wpnonce' ], plugin_basename(__FILE__) ) )
			return $post_id;
		} else {
			return $post_id;
		}
		if ( !current_user_can( 'edit_post', $post_id )) {
			return $post_id;
		}
		update_post_meta( $post_id, $key_portfolio, $data );
	}
}

add_action( 'admin_menu', 'create_portfolio_meta_box' );
add_action( 'save_post', 'save_portfolio_meta_box' );

// Custom post type for shortocde sliders
function create_slider_post_type() {
	register_post_type( 'udt_shortcode_slider',
		array(
			'labels' => array(
				'name' => __( 'Shortcode Sliders', 'ego' ),
				'singular_name' => __( 'Shortcode Slider', 'ego' ),
				'all_items' => __( 'All Shortcode Sliders', 'ego' ),
				'add_new_item' => __( 'Add New Shortcode Slider', 'ego' ),
				'edit_item' => __( 'Edit Shortcode Slider', 'ego' ),
				'new_item' => __( 'New Shortcode Slider', 'ego' ),
				'view_item' => __( 'View Shortcode Slider', 'ego' ),
				'search_items' => __( 'Search Shortcode Sliders', 'ego' ),
				'not_found' => __( 'No Shortcode Sliders found', 'ego' ),
				'not_found_in_trash' => __( 'No Shortcode Sliders found in Trash', 'ego' ),
				'menu_name' => __( 'Sc. Sliders', 'ego' ),
			),
			'description' => 'Create Sliders that you later can place on pages using the slider shortcode.',
			'public' => false,
			'has_archive' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'hierarchical' => true,
			'supports' => array('title','editor'),
			'rewrite' => false
		)
	);
}
add_action( 'init', 'create_slider_post_type' );

// Add custom fields to media uploader for Slider custom post type
function slider_attachment_fields_to_edit($form_fields, $post) {
	if(get_post_type($post->post_parent)=='udt_shortcode_slider') {
		$form_fields["udt_slide_link_url"]["label"] = __("<abbr title='Slide Link URL'>Slide Link U...</abbr>", 'ego');
		$form_fields["udt_slide_link_url"]["value"] = get_post_meta($post->ID, "_udt_slide_link_url", true);
		$form_fields["udt_slide_link_url"]["helps"] = "If you want the entire slide to be a link, enter the link URL here.";
	}
	return $form_fields;
}
add_filter("attachment_fields_to_edit", "slider_attachment_fields_to_edit", null, 2);

// Save custom fields for media uploader in Slider custom post type
function slider_gallery_attachment_fields_to_save($post, $attachment) {
	if(get_post_type($post['post_parent'])=='udt_shortcode_slider') {
		update_post_meta($post['ID'], '_udt_slide_link_url', $attachment['udt_slide_link_url']);
	}
	return $post;
}
add_filter("attachment_fields_to_save", "slider_gallery_attachment_fields_to_save", null, 2);

// Template for comments
function udt_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" style="float:left;margin-top:0;">
			<?php if ($comment->comment_approved == '0') : ?>
				<p style="float:left; width:100%;">Your comment is awaiting approval</p>
			<?php endif; ?>
			
			<div class="avatarWrapper">
				<?php echo get_avatar( $comment, 60 ); ?>
			</div>
			
			<div class="comment_left">
				<div class="comment_name">
					<strong><?php comment_author_link(); ?></strong>
				</div>
				<div class="comment_date"><?php comment_date(); ?> <?php edit_comment_link( __( 'Edit', 'ego' ), ' | ' ); ?></div>
				<div class="commentary"><?php comment_text(); ?></div>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
			</div>
		</div>

<?php }

// Shortcodes

// Add support for shortcodes in widgets
if (!is_admin()) {
	add_filter('widget_text', 'do_shortcode', 11);
	add_filter('widget_title', 'do_shortcode', 11);
}

// Shortcode for clear
function sc_clear( $atts ) {
	extract( shortcode_atts( array(
		'clear' => 'both',
		'float' => ''
	), $atts ) );
	$output_styles='style="';
	if($clear=='left' || $clear=='right') {
		$output_styles.='clear:'.$clear.';';
	} else {
		$output_styles.='clear:both;';
	}
	if($float!='') {
		$output_styles.=' float:'.$float.';';
	}
	$output_styles.='"';
	$output='<div '.$output_styles.'></div>';
	return $output;
}
add_shortcode('clear', 'sc_clear');

// Shortcode for span
function sc_span( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => '',
		'class' => ''
	), $atts ) );
	$output='<span ';
	if($class!='') $output.= 'class="'.$class.'" ';
	if($style!='') $output.= 'style="'.$style.'"';
	$output.='>'.$content.'</span>';
	return $output;
}
add_shortcode('span', 'sc_span');

// Shortcode for divider
function sc_divider( $atts ) {
	extract( shortcode_atts( array(
		'margin_top' => '0px',
		'margin_bottom' => '16px',
		'style' => ''
	), $atts ) );
	$margin_styles='';
	if($margin_top!='') {
		$margin_styles.='margin-top:'.$margin_top.'; ';
	}
	if($margin_bottom!='') {
		$margin_styles.='margin-bottom:'.$margin_bottom.'; ';
	}
	$output='<div class="divider"';
	if($style!='' || $margin_styles!='') $output.= ' style="'.$margin_styles.''.$style.'"';
	$output.='></div>';
	return $output;
}
add_shortcode('divider', 'sc_divider');

// Shortcode for column_one_half
function sc_column_one_half( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_half">'.$content.'</div>';
	return $output;
}
add_shortcode('column_one_half', 'sc_column_one_half');

// Shortcode for column_one_half_last
function sc_column_one_half_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_half last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_one_half_last', 'sc_column_one_half_last');

// Shortcode for column_one_third
function sc_column_one_third( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_third">'.$content.'</div>';
	return $output;
}
add_shortcode('column_one_third', 'sc_column_one_third');

// Shortcode for column_one_third_last
function sc_column_one_third_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_third last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_one_third_last', 'sc_column_one_third_last');

// Shortcode for column_one_fourth
function sc_column_one_fourth( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_fourth">'.$content.'</div>';
	return $output;
}
add_shortcode('column_one_fourth', 'sc_column_one_fourth');

// Shortcode for column_one_fourth_last
function sc_column_one_fourth_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_one_fourth last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_one_fourth_last', 'sc_column_one_fourth_last');

// Shortcode for column_two_thirds
function sc_column_two_thirds( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_two_thirds">'.$content.'</div>';
	return $output;
}
add_shortcode('column_two_thirds', 'sc_column_two_thirds');

// Shortcode for column_two_thirds_last
function sc_column_two_thirds_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_two_thirds last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_two_thirds_last', 'sc_column_two_thirds_last');

// Shortcode for column_three_fourths
function sc_column_three_fourths( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_three_fourths">'.$content.'</div>';
	return $output;
}
add_shortcode('column_three_fourths', 'sc_column_three_fourths');

// Shortcode for column_three_fourths_last
function sc_column_three_fourths_last( $atts, $content = null) {
	$content = wptexturize(wpautop(do_shortcode( $content )));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="column_three_fourths last">'.$content.'</div><div style="clear:both;"></div>';
	return $output;
}
add_shortcode('column_three_fourths_last', 'sc_column_three_fourths_last');

// Shortcode for message_box
function sc_message_box( $atts, $content = null) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output='style="'.$style.'"';
	}
	$content = do_shortcode(shortcode_unautop( $content ));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="message_box" '.$style_output.'>'.wptexturize(wpautop($content)).'</div>';
	return $output;
}
add_shortcode('message_box', 'sc_message_box');

// Shortcode for pre
function sc_pre( $atts, $content = null) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output='style="'.$style.'"';
	}
	$output='<pre '.$style_output.'>'.$content.'</pre>';
	return $output;
}
add_shortcode('pre', 'sc_pre');

// Shortcode for drop cap
function sc_drop_cap( $atts, $content = null) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output='style="'.$style.'"';
	}
	$output='<span class="dropcap" ';
	$output.=$style_output.'>';
	$output.=$content;
	$output.='</span>';
	return $output;
}
add_shortcode('drop_cap', 'sc_drop_cap');

// Shortcode for blockquotes
function sc_blockquote( $atts, $content = null) {
	extract( shortcode_atts( array(
		'blockquote_style' => '',
		'align' => '',
		'text_align' => '',
		'cite' => '',
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='' || $text_align!='') {
		$style_output='style="';
	}
	if($style!='') {
		$style_output.=$style.' ';
	}
	if($text_align=='left' || $text_align=='right' || $text_align=='center' || $text_align=='justify') {
		$style_output.='text-align:'.$text_align.'; ';
	}
	if($text_align=='center') {
		$style_output.='background-position:top center; ';
	}
	if($style!='' || $text_align!='') {
		$style_output.='"';
	}
	$output='<blockquote class="';
	if($blockquote_style=='quote') {
		$output.=$blockquote_style.' ';
	}
	if($align=='left' || $align=='right') {
		$output.=$align;
	}
	$output.='" '.$style_output.'>';
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output.=wpautop(wptexturize($content));
	if($cite!='') $output.='<p class="blockquote_cite">'.$cite.'</p>';
	$output.='</blockquote>';
	return $output;
}
add_shortcode('blockquote', 'sc_blockquote');

// Shortcode for highlights
function sc_highlight( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'highlight_type' => 'bold',
		'color' => '',
		'style' => ''
	), $atts ) );
	if($highlight_type!='bold' && $highlight_type!='italic' && $highlight_type!='mark') {
		$highlight_type='bold';
	}
	if($highlight_type=='bold') {
		$output='<strong';
	}
	if($highlight_type=='italic') {
		$output='<em';
	}
	if($highlight_type=='mark') {
		$output='<mark';
	}
	
	if($color!='') {
		$output.=' class="'.$color.'"';
	}
	
	if($style!='') {
		$output.=' style="'.$style.'"';
	}
	
	$output.='>'.$content;
	
	if($highlight_type=='bold') {
		$output.='</strong>';
	}
	if($highlight_type=='italic') {
		$output.='</em>';
	}
	if($highlight_type=='mark') {
		$output.='</mark>';
	}
	
	return $output;
}
add_shortcode('highlight', 'sc_highlight');

// Shortcode for lists
function sc_list( $atts, $content = null) {
	extract( shortcode_atts( array(
		'list_style' => 'grayDot',
		'style' => ''
	), $atts ) );
	$style_output='';
	if($style!='') {
		$style_output=' style="'.$style.'"';
	}
	$content=str_replace('<ul>','<ul class="'.$list_style.'"'.$style_output.'>',$content);
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output=$content;
	return $output;
}
add_shortcode('list', 'sc_list');

// Shortcode for buttons
function sc_button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => '',
		'title' => '',
		'size' => 'medium',
		'color' => 'theme',
		'new_window' => 'false',
		'style' => ''
	), $atts ) );
	$output_target='';
	$output_style='';
	$classes='submit';
	if($size=='small') $classes.=' submitSmall';
	if($size=='large') $classes.=' submitLarge';
	if($color=='theme') $classes.=' submitTheme';
	if($color=='gray') $classes.=' submitGray';
	if($color=='white') $classes.=' submitWhite';
	if($color=='turquoise') $classes.=' submitTurquoise';
	if($color=='yellow') $classes.=' submitYellow';
	if($color=='orange') $classes.=' submitOrange';
	if($style!='') $output_style=' style="'.$style.'"';
	if($title=='') $title=$content;
	if($new_window=='true') $output_target=' target="_blank"';

	$output='<a href="'.$url.'" class="'.$classes.'"'.$output_style.' title="'.$title.'"'.$output_target.'>'.$content.'</a>';
	return $output;
}
add_shortcode('button', 'sc_button');

// Shortcode for Twitter feed
function sc_tweets( $atts ) {
	extract( shortcode_atts( array(
		'id' => '',
		'username' => '',
		'count' => '3',
		'loading_text' => 'Loading tweets...',
		'style' => ''
	), $atts ) );
	if($id=='') {
		$output='<div class="tweets"';
	} else {
		$output='<div id="'.$id.'" class="tweets"';
	}
	if($style!='') $output.=' style="'.$style.'"';
	$output.='> <script type="application/json">{username:\''.$username.'\', count:\''.$count.'\', loading_text:\''.$loading_text.'\'}</script> </div><div style="clear:both; float:left;"></div>';
	return $output;
}
add_shortcode('tweets', 'sc_tweets');

// Shortcode for Social Links
function sc_social_links( $atts ) {
	extract( shortcode_atts( array(
		'dribbble' => '',
		'facebook' => '',
		'flickr' => '',
		'forrst' => '',
		'googleplus' => '',
		'linkedin' => '',
		'myspace' => '',
		'pinterest' => '',
		'skype' => '',
		'twitter' => '',
		'vimeo' => '',
		'style' => ''
	), $atts ) );
	$udt_sm_list=array('dribbble','facebook','flickr','googleplus','linkedin','myspace','pinterest','skype','twitter','vimeo');
	$output='<ul class="socialSmall" style="'.$style.'">';
	foreach($atts as $key => $val) {
		if(in_array($key,$udt_sm_list) && $val!='') {
			$output.='<li><a class="'.strtolower(trim($key)).'" href="'.trim($val).'" target="_blank"></a></li>';
		}
	}
	$output.='</ul>';
	return $output;
}
add_shortcode('social_links', 'sc_social_links');

// Shortcode for Google Maps
function sc_google_maps($atts, $content = null) {
	extract(shortcode_atts(array(
		'id' => 'map_canvas',
		'lat' => '',
		'long' => '',
		'zoom' => '',
		'marker' => 'default',
		'info_title' => '',
		'info_content' => '',
		'width' => '100%',
		'height' => '300px',
		'style' => ''
	), $atts));
	$output='<div class="map" id="'.$id.'" style="width:'.$width.'; height:'.$height.'; '.$style.'"> <script type="application/json">{map_lat:\''.$lat.'\', map_long:\''.$long.'\', map_zoom:\''.$zoom.'\', map_marker:\''.$marker.'\', map_info_title:\''.$info_title.'\', map_info_content:\''.$info_content.'\'}</script></div>';
	return $output;
}
add_shortcode("map", "sc_google_maps");

// Shortcode for videos
function sc_video( $atts ) {
	extract( shortcode_atts( array(
		'type' => 'youtube',
		'url' => '',
		'width' => '100%',
		'height' => 'auto',
		'player_id' => 'player1',
		'style' => ''
	), $atts ) );
	$output='<div class="video" style="width:'.$width.'; height:'.$height.'; '.$style.'">';
	if($type=='vimeo') {
		$output.='<iframe width="'.$width.'" height="'.$height.'" src="http://player.vimeo.com/video/'.$url.'?title=0&amp;byline=0&amp;portrait=0&amp;color='.returnOptionValue('vimeo_controls_color').'&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	} else if($type=='youtube') {
		$output.='<iframe  width="'.$width.'" height="'.$height.'" src="http://www.youtube.com/embed/'.$url.'?autohide=2&amp;disablekb=0&amp;fs=1&amp;hd=0&amp;loop=0&amp;rel=0&amp;showinfo=0&amp;showsearch=0&amp;wmode=transparent" frameborder="0"></iframe>';
	}
	$output.='</div>';
	return $output;
}
add_shortcode('video', 'sc_video');

// Shortcode for round thumb
function sc_round_thumb( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => '',
		'width' => '250px',
		'align' => 'left',
		'link' => '',
		'link_title' => '',
		'lightbox' => 'false',
		'overlay' => 'true',
		'style' => ''
	), $atts ) );
	
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	
	$lightbox_class='';
	if($lightbox=='image') {
		$lightbox_class='lightbox';
	} else if($lightbox=='iframe') {
		$lightbox_class='lightbox-iframe';
	}
	
	if($overlay!='true') {
		$no_overlay=' no_overlay';
	} else {
		$no_overlay='';
	}
	
	$output='<div class="round-thumb-container '.$align.''.$no_overlay.'" style="width:'.$width.'; max-width:100%; '.$style.'">';
		$output.='<div class="round-thumb">';
		if($link!='') {
			$output.='<a href="'.$link.'" title="'.$link_title.'" class="'.$lightbox_class.'">';
		} else {
			$output.='<span>';
		}
		$output.='<img src="'.$url.'" alt="" class="lazy" />';
		if($link!='') {
			$output.='</a>';
		} else {
			$output.='</span>';
		}
	$output.='</div>';
	if($content!='') { $output.='<div class="fancybox-html">'.wptexturize(wpautop($content)).'</div>'; }
	$output.='</div>';
	return $output;
}
add_shortcode('round_thumb', 'sc_round_thumb');

// Shortcode for image
function sc_image( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => '',
		'width' => '100%',
		'height' => 'auto',
		'align' => '',
		'link' => '',
		'link_title' => '',
		'overlay' => 'true',

		'style' => ''
	), $atts ) );
	
	if($overlay!='true') {
		$no_overlay=' no_overlay';
	} else {
		$no_overlay='';
	}
	
	$output='<div class="thumb '.$align.''.$no_overlay.'" style="width:'.$width.'; height:'.$height.'; '.$style.'">';
		if($link!='') {
			$output.='<a href="'.$link.'" title="'.$link_title.'" class="linkedImageLink">';
		}
		$output.='<img width="'.$width.'" height="'.$height.'" src="'.$url.'" alt="" class="lazy" />';
		if($link!='') {
			$output.='</a>';
		}
	$output.='</div>';
	return $output;
}
add_shortcode('image', 'sc_image');

// Shortcode for lightboxes
function sc_lightbox( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'media_type' => 'image',
		'thumbnail_url' => '',
		'url' => '',
		'link_title' => '',
		'width' => '100%',
		'height' => 'auto',
		'align' => 'left',
		'overlay' => 'true',
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	
	if($overlay!='true') {
		$no_overlay=' no_overlay';
	} else {
		$no_overlay='';
	}
	
	if($media_type=='image') {
		$output='<div class="thumb '.$align.''.$no_overlay.'" style="width:'.$width.'; height:'.$height.'; '.$style.'"><a class="lightbox" href="'.$url.'" title="'.$link_title.'"><img src="'.$thumbnail_url.'" style="width:'.$width.'; height:'.$height.';" alt="" class="lazy" /></a>';
		$output.='</div>';
		if($content!='') { $output.='<div class="fancybox-html">'.wptexturize(wpautop($content)).'</div>'; }
	} else if($media_type=='iframe') {
		$output='<div class="thumb '.$align.''.$no_overlay.'" style="width:'.$width.'; height:'.$height.'; '.$style.'"><a class="lightbox-iframe" href="'.$url.'" title="'.$link_title.'"><img src="'.$thumbnail_url.'" style="width:'.$width.'; height:'.$height.';" alt="" /></a></div>';
		if($content!='') { $output.='<div class="fancybox-html">'.wptexturize(wpautop($content)).'</div>'; }
	}
	return $output;
}
add_shortcode('lightbox', 'sc_lightbox');

// Shortcode for slider
function sc_slider( $atts ) {
	extract( shortcode_atts( array(
		'id' => '',
		'size' => 'blog-width',
		'style' => ''
	), $atts ) );
	if($id=='') {
		return 'Please set the id attirbute.';
	}
	if($size=='thumbnail') {
		$size_output='udt-portfolio-thumb';
		$width='195px';
		$height='195px';
	} else if($size=='page-width') {
		$size_output='udt-page-image';
		$width='680px';
		$height='383px';
	} else if($size=='full-width') {
		$size_output='udt-full-width-image';
		$width='930px';
		$height='524px';
	} else if($size=='full-size') {
		$size_output='full';
		$width='';
		$height='';
	} else {
		$size_output=array(600,338);
		$width='600px';
		$height='338px';
	}
	if(isset($width) && $width!='') {
		$style_output='style="width:'.$width.'; height:'.$height.'; '.$style.'"';
	} else {
		$style_output='style="'.$style.'"';
	}
	
	global $post;
	$tmp_post = $post;
	
	$sc_my_args = array( 'post_type' => 'udt_shortcode_slider', 'posts_per_page' => -1, 'post_id' => $id );
	$sc_my_query = new WP_Query( $sc_my_args );
	while ( $sc_my_query->have_posts() ) : $sc_my_query->the_post();
		$sc_my_args_2 = array(
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'numberposts' => -1,
			'post_status' => 'inherit',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'post_parent' => $id
		);
		$sc_attachments = get_posts( $sc_my_args_2 );
		$count_attachments = count($sc_attachments);
		
		if($count_attachments>1) {
			$output = '<div class="flexslider" '.$style_output.'>';
				$output .= '<ul class="slides">';
				
				foreach ( $sc_attachments as $sc_attachment ) {
					
					$slide_link_url = get_post_meta( $sc_attachment->ID, '_udt_slide_link_url', true );
					
					$output .= '<li>';
					
					$image_src=wp_get_attachment_image_src($sc_attachment->ID,$size_output);
					
					if($slide_link_url!='') {
						$output .= '<a href="'.$slide_link_url.'">';
					}
					$output .= '<img src="'.$image_src[0].'" alt="" />';
					if($slide_link_url!='') {
						$output .= '</a>';
					}
					
					if(wp_get_attachment_metadata($sc_attachment->ID)) {
						if($sc_attachment->post_excerpt !='') {
							$output .= '<p class="flex-caption">' . $sc_attachment->post_excerpt . '</p>';
						} else if($sc_attachment->post_content !='') {
							$output .= '<p class="flex-caption">' . $sc_attachment->post_content . '</p>';
						}
					}
					
					$output .= '</li>'."\n";
				}
					
				$output .= '</ul>';
			$output .= '</div>';
		} else {
			$output='Please upload multiple images to the slider.';
		}
		
	endwhile;
	
	$post = $tmp_post;
	
	return $output;
}
add_shortcode('slider', 'sc_slider');

// Shortcode for accordion
function sc_accordion( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<dl class="accordion" style="'.$style.'">'.$content.'</dl>';
}
add_shortcode("accordion", "sc_accordion");

// Shortcode for accordion_label
function sc_accordion_label( $atts, $content = null ) {
	/*extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );*/
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<dt><a href="#"><span>+</span> '.wptexturize($content).'</a></dt>';
}
add_shortcode("accordion_label", "sc_accordion_label");

// Shortcode for accordion_content
function sc_accordion_content( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<dd style="'.$style.'">'.wptexturize(wpautop($content)).'</dd>';
}
add_shortcode("accordion_content", "sc_accordion_content");

// Shortcode for tabs
function sc_tabs( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'labels' => '',
		'style' => ''
	), $atts ) );
	if($labels=='') {
		return 'Please set the labels attirbute.';
	}
	$labels=explode(',',$labels);
	$label_ref_count=1;
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="tabs" style="'.$style.'">';
	$output.='<ul class="tabs_nav">';
	foreach($labels as $label) {
		$output.='<li><a href="#" data-label_ref="'.$label_ref_count.'">'.trim($label).'</a></li>';
		$label_ref_count++;
	}
	$output.='</ul>';
	$output.=$content.'</div>';
	return $output;
}
add_shortcode("tabs", "sc_tabs");

// Shortcode for tab
function sc_tab( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'label_ref' => '',
		'style' => ''
	), $atts ) );
	if($label_ref=='') {
		return 'Please set the label_ref attirbute.';
	}
	$content = do_shortcode(shortcode_unautop( $content ));
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	return '<div class="tabs_content" data-label_ref="'.$label_ref.'" style="'.$style.'">'.wptexturize(wpautop($content)).'</div>';
}
add_shortcode("tab", "sc_tab");

// Shortcode for pricing_table
function sc_pricing_table( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'columns' => '1',
		'style' => ''
	), $atts ) );
	$classes='pricing_table';
	if($columns=='2') {
		$classes.=' pricing_table_two_cols';
	} else if($columns=='3') {
		$classes.=' pricing_table_three_cols';
	} else if($columns=='4') {
		$classes.=' pricing_table_four_cols';
	} else if($columns=='5') {
		$classes.=' pricing_table_five_cols';
	}
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="'.$classes.'" style="'.$style.'">';
	$output.=$content.'</div>';
	return $output;
}
add_shortcode("pricing_table", "sc_pricing_table");

// Shortcode for pricing_table_column
function sc_pricing_table_column( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => ''
	), $atts ) );
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
	$output='<div class="pricing_table_col" style="'.$style.'">';
	$output.=$content.'</div>';
	return $output;
}
add_shortcode("pricing_table_column", "sc_pricing_table_column");

// Shortcode for charts
function sc_chart( $atts ) {
	extract( shortcode_atts( array(
		'data' => '',
		'style' => ''
	), $atts ) );
	$output='<div class="chart-container" style="'.$style.'">';
	if($data!='') {
		$data=explode(';',$data);
		
		$output.='<ul class="chart">';
		
		foreach($data as $row) {
			$row=explode(':',$row);
			if(isset($row[0]) && $row[0]!='') {
				$output.='<li style="width:'.trim($row[1]).';">';
					$output.='<h6>'.trim($row[0]).'</h6>';
					$output.='<div>'.trim($row[1]).'</div>';
				$output.='</li>';
			}
		}
		
		$output.='</ul>';
	} else {
		$output.='Please enter data in the data attribute.';
	}
	$output.='</div>';
	return $output;
}
add_shortcode('chart', 'sc_chart');

// Convert hex to RGB
function hex2rgb($hex) {
	$hex = str_replace("#", "", $hex);
	
	if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
	}
	$rgb = array($r, $g, $b);
	return $rgb;
}

// Dynamic stylesheet
function udt_custom_wp_request( $wp ) {
    if (
        !empty( $_GET['udt-custom-content'] )
        && $_GET['udt-custom-content'] == 'css'
    ) {
        # get theme options
        header( 'Content-Type: text/css' );
        require 'custom-css.php';
        exit;
    }
}
add_action( 'parse_request', 'udt_custom_wp_request' );

// Add divider between custom fields in WordPress Media Modal
function amp_admin_head() {
	echo '<style>
		.compat-item table.compat-attachment-fields {
			margin-top:11px;
			padding-top:11px;
			border-top:1px solid #e5e5e5;
			box-shadow:inset 0 1px 0 #ffffff;
		}
		.compat-item table.compat-attachment-fields tr {
			margin-bottom:11px;
			padding-bottom:11px;
			border-bottom:1px solid #e5e5e5;
			box-shadow:0 1px 0 #ffffff;
		}
	</style>';
}
add_action('admin_head', 'amp_admin_head');

// Override wplink.js
function wpse22643_override_wplink( $hook ) {
    wp_register_script(
        'override-wplink', 
        get_stylesheet_directory_uri() . '/js/override-wplink.js',
        array( 'jquery' ),
        '',
        TRUE
    );
    wp_enqueue_script( 'override-wplink' );
}
add_action( 'admin_print_scripts-post.php',     'wpse22643_override_wplink' );
add_action( 'admin_print_scripts-post-new.php', 'wpse22643_override_wplink' );

?>