<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories = array();  
		$of_categories_obj = get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp = array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages = array();
		$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp = array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select = array("one","two","three","four","five"); 
		$of_options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" => "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = STYLESHEETPATH. '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_bloginfo('template_url').'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


		/************************************************************************
		* Parallax Selects
		*************************************************************************/

		$nzs_parallax = array();
		$nzs_parallax['none'] = __('Attach Parallax','framework');


		$test_select = new WP_Query( array( 'post_type' => 'parallax-sections', 'posts_per_page' => -1, 'order' => 'ASC' ));

		    if($test_select->have_posts()):  while($test_select->have_posts()) : $test_select->the_post();

		            $nzs_parallax[get_the_ID()] =  get_the_title();

		        endwhile;
		    endif;


		$nzs_page_section = array();
		$nzs_page_section['none'] = __('Attach Section','framework');


		$test_select = new WP_Query( array( 'post_type' => 'page-sections', 'posts_per_page' => -1, 'order' => 'ASC' ));

		    if($test_select->have_posts()):  while($test_select->have_posts()) : $test_select->the_post();

		            $nzs_page_section[get_the_ID()] =  get_the_title();

		        endwhile;
		    endif;


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

$prefix = "nzs_";

// Set the Options Array
global $of_options;
$of_options = array();

/************************************************************************
* HOME SETTINGS
*************************************************************************/

$of_options[] = array( "name" => "Home Settings",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Use Plain Text Logo",
					"desc" => "If you want to use plain text instead of image logo, then check this option.",
					"id" => $prefix."plain_text_logo",
					"std" => 0,
					"type" => "checkbox");
								
$of_options[] = array( "name" => "Site Logo Upload",
					"desc" => "Upload a logo using the upload button or enter a url (ie: http://www.yoursite.com/logo.png).",
					"id" => $prefix."logo",
					"std" => "",
					"type" => "media");

$of_options[] = array( "name" => "",
					"desc" => "px Custom Logo Width",
					"id" => $prefix."logo_width",
					"std" => "",
					"type" => "text",
					"class" => "mini"); 

$of_options[] = array( "name" => "",
					"desc" => "px Custom Logo Height",
					"id" => $prefix."logo_height",
					"std" => "",
					"type" => "text",
					"class" => "mini"); 

$of_options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => $prefix."custom_favicon",
					"std" => "",
					"type" => "upload"); 

$of_options[] = array( "name" => "Alternating Background 1",
					"desc" => "Upload a background image to alternate. You can override this when creating page sections.",
					"id" => $prefix."alternate_bg1",
					"std" => "",
					"type" => "media");

$of_options[] = array( "name" => "",
					"desc" => "Or Choose a color.",
					"id" => $prefix."alternate_bg1_color",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Alternating Background 2",
					"desc" => "Upload a background image to alternate. You can override this when creating page sections.",
					"id" => $prefix."alternate_bg2",
					"std" => "",
					"type" => "media");

$of_options[] = array( "name" => "",
					"desc" => "Or Choose a color.",
					"id" => $prefix."alternate_bg2_color",
					"std" => "",
					"type" => "color");

// $of_options[] = array( "name" => "Background Images",
// 					"desc" => "Select a background pattern.",
// 					"id" => $prefix."custom_bg_1",
// 					"std" => $bg_images_url."bg0.png",
// 					"type" => "tiles",
// 					"options" => $bg_images,
// 					);

// $of_options[] = array( "name" => "Background Images",
// 					"desc" => "Select a background pattern.",
// 					"id" => $prefix."custom_bg_2",
// 					"std" => $bg_images_url."bg0.png",
// 					"type" => "tiles",
// 					"options" => $bg_images,
// 					);
					
// $of_options[] = array( "name" => "Media Uploader Min",
// 					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
// 					"id" => "media_upload_2",
// 					"std" => "",
// 					"mod" => "min",
// 					"type" => "media");
					
// $of_options[] = array( "name" => "Homepage Layout Manager",
// 					"desc" => "Organize how you want the layout to appear on the homepage",
// 					"id" => "homepage_blocks",
// 					"std" => $of_options_homepage_blocks,
// 					"type" => "sorter");
					
// $of_options[] = array( "name" => "Slider Options",
// 					"desc" => "Unlimited slider with drag and drop sortings.",
// 					"id" => "pingu_slider",
// 					"std" => "",
// 					"type" => "slider");


/************************************************************************
* HEADER OPTIONS
*************************************************************************/

$of_options[] = array( "name" => "Header Options",
					"type" => "heading"
					);

$url =  ADMIN_DIR . 'assets/images/';


$of_options[] = array( "name" => "Header Options",
					"desc" => "Use the drop down to select the header you'd like to use.",
					"id" => $prefix."header_options",
					"std" => "fullscreen",
					"type" => "select-custom",
					"options" => 
						array(
							'parallax' => 'Parallax',
							'flexslider' => 'FlexSlider',
							'fullscreen' => 'Full Screen Slider',
							'customheader' => 'Custom Header',

							)

					);


/************************************************************************
* Custom Header Option
*************************************************************************/

$of_options[] = array( "name" => "customheader",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Custom Header Code",
					"desc" => "Insert custom header code/shortcodes in here.",
					"id" => $prefix."custom_header_code",
					"std" => "",
					"type" => "textarea");  

$of_options[] = array( "name" => "Background Image",
					"desc" => "Upload a repeatable background image.",
					"id" => $prefix."custom_slider_bg_image",
					"std" => "",
					"type" => "upload"); 
$of_options[] = array( "name" => "",
					"desc" => "Repeat Options",
					"id" => $prefix."custom_bg_repeat",
					"std" => "repeat",
					"type" => "select-custom",
					"options" => 
						array(
							'repeat' => 'Repeat',
							'repeat-x' => 'Repeat X',
							'repeat-y' => 'Repeat y',
							'no-repeat' => 'No Repeat',

							)

					);

$of_options[] = array( "name" => "Nav Position",
					"desc" => "Select if you'd like nav on top or bottom",
					"id" => $prefix."nav_position",
					"std" => "top",
					"type" => "select-custom",
					"options" => 
						array(
							'top' => 'Top',
							'bottom' => 'Bottom',

							)

					);




$of_options[] = array( "name" => "flexslider",
					"type" => "heading"
					);


$of_options[] = array( "name" => "FlexSlider Slides",
					"desc" => "Unlimited slider with drag and drop sortings.",
					"id" => $prefix."flex_slider",
					"std" => "",
					"type" => "slider");

$of_options[] = array( "name" => "Background Image",
					"desc" => "Upload a repeatable background image.",
					"id" => $prefix."flex_slider_bg_image",
					"std" => "",
					"type" => "upload"); 

$of_options[] = array( "name" =>  "Color Options",
					"desc" => "Heading Font",
					"id" => $prefix."heading_font_flexslider",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Description font color.",
					"id" => $prefix."desc_font_flexslider",
					"std" => "",
					"type" => "color"); 

$of_options[] = array( "name" =>  "",
					"desc" => "Slider frame color.",
					"id" => $prefix."frame_flexslider",
					"std" => "",
					"type" => "color"); 
  

$of_options[] = array( "name" => "parallax",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Heading Text",
					"desc" => "",
					"id" => $prefix."parallax_heading_text",
					"std" => 'Parallax',
					"type" => "text");

$of_options[] = array( "name" => "Description Text",
					"desc" => "",
					"id" => $prefix."parallax_description_text",
					"std" => 'Great one page theme with tons of possibilities and options!',
					"type" => "text"); 

$of_options[] = array( "name" => "Upload Image for Parallax header",
					"desc" => "This image is used in header.",
					"id" => $prefix."parallax_image",
					"std" => "",
					"type" => "upload"); 

$of_options[] = array( "name" => "Header Logo (optional)",
					"desc" => "You can use this image upload to insert a logo in the header.",
					"id" => $prefix."parallax_logo_image",
					"std" => "",
					"type" => "media"); 

$of_options[] = array( "name" =>  "Font Colors",
					"desc" => "Heading Font",
					"id" => $prefix."heading_font_parallax",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Description font color.",
					"id" => $prefix."desc_font_parallax",
					"std" => "",
					"type" => "color"); 

$of_options[] = array( "name" => "FullScreen",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Full Screen Slides",
					"desc" => "Unlimited slider with drag and drop sortings.",
					"id" => $prefix."full_screen_slider",
					"std" => "",
					"type" => "slider");

$of_options[] = array( "name" => "Header Logo (optional)",
					"desc" => "You can use this image upload to insert a logo in the header.",
					"id" => $prefix."fullscreen_logo_image",
					"std" => "",
					"type" => "media"); 

$of_options[] = array( "name" => "Slide Speed",
					"desc" => "Adjust speed between slides",
					"id" => $prefix."fullscreen_speed",
					"std" => "4000",
					"type" => "select",
					"options" => array(
						"2000",
						"2500",
						"3000",
						"3500",
						"4000",
						"4500",
						"5000",
						"5500",
						"6000",
						)); 

$of_options[] = array( "name" => "Slide Transition",
					"desc" => "Choose transition effect for between slides.",
					"id" => $prefix."fullscreen_trans",
					"std" => "1",
					"type" => "select-custom",
					"options" => 
						array(
							'0' => 'None',
							'1' => 'Fade',
							'2' => 'Slide Top',
							'3' => 'Slide Right',
							'4' => 'Slide Bottom',
							'5' => 'Slide Left',
							'6' => 'Carousel Right',
							'7' => 'Carousel Left',
						)

					); 

$of_options[] = array( "name" =>  "Font Colors",
					"desc" => "Heading Font",
					"id" => $prefix."heading_font_fullscreen",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Description font color.",
					"id" => $prefix."desc_font_fullscreen",
					"std" => "",
					"type" => "color"); 



/************************************************************************
* GENERAL SETTINGS
*************************************************************************/

$of_options[] = array( "name" => "General Settings",
                    "type" => "heading");


$of_options[] = array( "name" => "Disable Responsive Layout",
					"desc" => "Check box to <b>turn off</b> responsive layout.",
					"id" => $prefix."responsive_layout",
					"std" => 0,
					"type" => "checkbox");


$of_options[] = array( "name" => "Default Parallax",
					"desc" => "Optional Choose a default parallax for pages, post, etc. This is shown at bottom of pages.",
					"id" => $prefix."default_parallax",
					"std" => "none",
					"type" => "select-custom",
					"options" =>$nzs_parallax,

					); 

$of_options[] = array( "name" => "Default Page Section",
					"desc" => "Optional Choose a default page section for pages, post, etc. This is shown at bottom of pages.",
					"id" => $prefix."default_page_section",
					"std" => "none",
					"type" => "select-custom",
					"options" =>$nzs_page_section,

					);  
                                               
$of_options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => $prefix."google_analytics",
					"std" => "",
					"type" => "textarea");        


$of_options[] = array( "name" => "Footer Text",
                    "desc" => "You can use the following shortcodes in your footer text: [theme-link] [the-year]",
                    "id" => $prefix."footer_text",
                    "std" => "",
                    "type" => "textarea");     

/************************************************************************
* Typography OPTIONS
*************************************************************************/                                                     
    
$of_options[] = array( "name" => "Typography",
					"type" => "heading");

$of_options[] = array( "name" => "Body Font",
					"desc" => "Specify the body font properties",
					"id" => $prefix."body_font",
					"std" => array('size' => '13px','face' => 'Open Sans','color' => '#303030'),
					"type" => "typography");  

$of_options[] = array( "name" => "Heading Font",
					"desc" => "Specify the heading font properties",
					"id" => $prefix."heading_face_font",
					"std" => array('face' => 'Oswald','color' => '#cc6633'),
					"type" => "typography");

$of_options[] = array( "name" => "Heading 1",
					"desc" => "Font size for H1 tags. Default size: 46px",
					"id" => $prefix."heading_one",
					"std" => array('size' => '46px'),
					"type" => "typography"); 

$of_options[] = array( "name" => "Heading 2",
					"desc" => "Font size for H2 tags. Default size: 35px",
					"id" => $prefix."heading_two",
					"std" => array('size' => '35px'),
					"type" => "typography"); 

$of_options[] = array( "name" => "Heading 3",
					"desc" => "Font size for H3 tags. Default size: 28px",
					"id" => $prefix."heading_three",
					"std" => array('size' => '28px'),
					"type" => "typography"); 

$of_options[] = array( "name" => "Heading 4",
					"desc" => "Font size for H4 tags. Default size: 21px",
					"id" => $prefix."heading_four",
					"std" => array('size' => '21px'),
					"type" => "typography"); 

$of_options[] = array( "name" => "Heading 5",
					"desc" => "Font size for H5 tags. Default size: 17px",
					"id" => $prefix."heading_five",
					"std" => array('size' => '17px'),
					"type" => "typography"); 

$of_options[] = array( "name" => "Heading 6",
					"desc" => "Font size for H6 tags. Default size: 14px",
					"id" => $prefix."heading_six",
					"std" => array('size' => '14px'),
					"type" => "typography");  
/************************************************************************
* Styling Options
*************************************************************************/  

$of_options[] = array( "name" => "Styling Options",
					"type" => "heading");

$of_options[] = array( "name" => "Navigation Styling",
					"desc" => "Upload a image for navigation background image.",
					"id" => $prefix."nav_bg_image",
					"std" => "",
					"type" => "media");

$of_options[] = array( "name" =>  "",
					"desc" => "Background Color",
					"id" => $prefix."nav_bg_color",
					"std" => "",
					"type" => "color");
$of_options[] = array( "name" =>  "",
					"desc" => "Border Color",
					"id" => $prefix."nav_border_color",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Link Color",
					"id" => $prefix."nav_link_color",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Link Hover Color",
					"id" => $prefix."nav_link_hover",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Sub Menu Background Color",
					"id" => $prefix."nav_subbg",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Sub Menu Hover Background Color",
					"id" => $prefix."nav_subbg_hover",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Sub Menu Border Color",
					"id" => $prefix."nav_subborder",
					"std" => "",
					"type" => "color");


$of_options[] = array( "name" =>  "Image Hover Styling",
					"desc" => "Image Overlay Color",
					"id" => $prefix."overlay_color",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Icon BG Color",
					"id" => $prefix."bg_icon_color",
					"std" => "",
					"type" => "color"); 

$of_options[] = array( "name" =>  "Link Styling",
					"desc" => "Link Color",
					"id" => $prefix."link_color",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Hover Color",
					"id" => $prefix."link_hover",
					"std" => "",
					"type" => "color"); 

$of_options[] = array( "name" =>  "Button Styling",
					"desc" => "Background Color",
					"id" => $prefix."button_background",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Border Color",
					"id" => $prefix."button_border",
					"std" => "",
					"type" => "color");
					
$of_options[] = array( "name" =>  "",
					"desc" => "Font Color",
					"id" => $prefix."button_font_color",
					"std" => "",
					"type" => "color"); 
					
$of_options[] = array( "name" =>  "Footer Styling",
					"desc" => "Background Color",
					"id" => $prefix."footer_background",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Border Color",
					"id" => $prefix."footer_border",
					"std" => "",
					"type" => "color");
					
$of_options[] = array( "name" =>  "",
					"desc" => "Font Color",
					"id" => $prefix."footer_font_color",
					"std" => "",
					"type" => "color"); 

$of_options[] = array( "name" =>  "",
					"desc" => "Link Color",
					"id" => $prefix."footer_link_color",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "",
					"desc" => "Link Hover Color",
					"id" => $prefix."footer_link_hover_color",
					"std" => "",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Custom CSS",
                    "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                    "id" => $prefix."custom_css",
                    "std" => "",
                    "type" => "textarea");

/************************************************************************
* Recent Works
*************************************************************************/

$of_options[] = array( "name" => "Works Options",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Excerpt Length",
					"desc" => "Custom Excerpt Length",
					"id" => $prefix."works_excerpt_length",
					"std" => "85",
					"type" => "text",
					"class" => "mini"); 

$of_options[] = array( "name" => "Recent Works Page/Link",
					"desc" => "Hide recent works link/page? Checking this box hides works pages link hover icon.",
					"id" => $prefix."hide_works_link",
					"std" => 0,
					"type" => "checkbox"); 

$url =  ADMIN_DIR . 'assets/images/';
$of_options[] = array( "name" => "Recent Works Columns",
					"desc" => "Select if you'd like 3 or 4 per row by clicking one of the images.",
					"id" => $prefix."works_cols",
					"std" => '3',
					"type" => "images",
					"options" => array(
						'3' => $url . '3-col-portfolio.png',
						'4' => $url . '4-col-portfolio.png')); 

$of_options[] = array( "name" => "Image Frame Background",
					"desc" => "Can choose a background color for image frame/box.",
					"id" => $prefix."working_frame_bg",
					"std" => "",
					"type" => "color");


$of_options[] = array( "name" => "Heading Font",
					"desc" => "Options for heading font.",
					"id" => $prefix."works_heading",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Description Font",
					"desc" => "Options for description font.",
					"id" => $prefix."works_desc",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography"); 

/************************************************************************
* Portfolio
*************************************************************************/

$of_options[] = array( "name" => "Portfolio Options",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Excerpt Length",
					"desc" => "Custom Excerpt Length",
					"id" => $prefix."portfolio_excerpt_length",
					"std" => "55",
					"type" => "text",
					"class" => "mini"); 

$of_options[] = array( "name" => "Portfolio Page/Link",
					"desc" => "Hide portfolio link/page? Checking this box hides portfolio pages link hover icon.",
					"id" => $prefix."hide_portfolio_link",
					"std" => 0,
					"type" => "checkbox"); 


$of_options[] = array( "name" => "Portfolio Display Order Options",
					"desc" => "Use the drop down to select orderby value",
					"id" => $prefix."portfolio_orderby",
					"std" => "ID",
					"type" => "select-custom",
					"options" => 
						array(
							'title' => 'Title',
							'ID' => 'Default',
							'date' => 'Date',
							'rand' => 'Random',

							)

					);

$of_options[] = array( "name" => "",
					"desc" => "Use the drop down to select to ascend order or descend.",
					"id" => $prefix."portfolio_order",
					"std" => "DESC",
					"type" => "select-custom",
					"options" => 
						array(
							'ASC' => 'Ascending',
							'DESC' => 'Decending',

							)

					);


$url =  ADMIN_DIR . 'assets/images/';
$of_options[] = array( "name" => "Portfolio Columns",
					"desc" => "Select if you'd like 3 or 4 per row by clicking one of the images.",
					"id" => $prefix."portfolio_cols",
					"std" => '4',
					"type" => "images",
					"options" => array(
						'3' => $url . '3-col-portfolio.png',
						'4' => $url . '4-col-portfolio.png')); 

$of_options[] = array( "name" => "Image Frame Background",
					"desc" => "Can choose a background color for image frame/box.",
					"id" => $prefix."portfolio_frame_bg",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Heading Font",
					"desc" => "Options for heading font.",
					"id" => $prefix."portfolio_heading",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Description Font",
					"desc" => "Options for description font.",
					"id" => $prefix."portfolio_desc",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

/************************************************************************
* Team
*************************************************************************/

$of_options[] = array( "name" => "Team Options",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Image Frame Background",
					"desc" => "Can choose a background color for image frame/box.",
					"id" => $prefix."team_frame_bg",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Image Frame Background Hover",
					"desc" => "Can choose a background hover color for image frame/box.",
					"id" => $prefix."team_hover_bg",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Team Name Font",
					"desc" => "Font size and color for members name.",
					"id" => $prefix."team_name",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Last Name Font Color",
					"desc" => "Font Color for members last name (optional).",
					"id" => $prefix."team_name_last",
					"std" =>"",
					"type" => "color");

$of_options[] = array( "name" => "Position Font",
					"desc" => "Font size and color for members position.",
					"id" => $prefix."team_position",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Description Font",
					"desc" => "Font size for members info text",
					"id" => $prefix."team_desc",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");


/************************************************************************
* Blog
*************************************************************************/

$of_options[] = array( "name" => "Blog Options",
					"type" => "heading"
					);

$of_options[] = array( "name" => "Image Frame Background",
					"desc" => "Can choose a background color for image frame/box.",
					"id" => $prefix."blog_frame_bg",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Blog Title Font",
					"desc" => "Size and color option for post titles.",
					"id" => $prefix."blog_heading",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Description Font",
					"desc" => "Size and color option for general post text.",
					"id" => $prefix."blog_desc",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Link Color",
					"desc" => "Link color within posts/blog section.",
					"id" => $prefix."blog_link",
					"std" => "",
					"type" => "color");
$of_options[] = array( "name" => "Link Hover Color",
					"desc" => "Link hover color within posts/blog section.",
					"id" => $prefix."blog_hover_link",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Widget Heading Font",
					"desc" => "Widget headings font size and color.",
					"id" => $prefix."widget_heading",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography"); 

$of_options[] = array( "name" => "Widget Font",
					"desc" => "Font size and color for text within widgets.",
					"id" => $prefix."widget_desc",
					"std" => array('size' => '12px','color' => ''),
					"type" => "typography");

$of_options[] = array( "name" => "Meta Font",
					"desc" => "Font size and color for post meta.",
					"id" => $prefix."meta_desc",
					"std" => array('size' => '10px','color' => ''),
					"type" => "typography");     


/************************************************************************
* EXAMPL OPTIONS
*************************************************************************/

// $of_options[] = array( "name" => "Example Options",
// 					"type" => "heading"); 	   

// $of_options[] = array( "name" => "Typography",
// 					"desc" => "This is a typographic specific option.",
// 					"id" => "typography",
// 					"std" => array('size' => '12px','face' => 'verdana','style' => 'bold italic','color' => '#123456'),
// 					"type" => "typography");  
					
// $of_options[] = array( "name" => "Border",
// 					"desc" => "This is a border specific option.",
// 					"id" => "border",
// 					"std" => array('width' => '2','style' => 'dotted','color' => '#444444'),
// 					"type" => "border");      
					
// $of_options[] = array( "name" => "Colorpicker",
// 					"desc" => "No color selected.",
// 					"id" => "example_colorpicker",
// 					"std" => "",
// 					"type" => "color"); 
					
// $of_options[] = array( "name" => "Colorpicker (default #2098a8)",
// 					"desc" => "Color selected.",
// 					"id" => "example_colorpicker_2",
// 					"std" => "#2098a8",
// 					"type" => "color");          
                  
// $of_options[] = array( "name" => "Upload",
// 					"desc" => "An image uploader without text input.",
// 					"id" => "uploader",
// 					"std" => "",
// 					"type" => "upload");  
					
// $of_options[] = array( "name" => "Upload Min",
// 					"desc" => "An image uploader with text input.",
// 					"id" => "uploader2",
// 					"std" => "",
// 					"mod" => "min",
// 					"type" => "upload");     
                                
// $of_options[] = array( "name" => "Input Text",
// 					"desc" => "A text input field.",
// 					"id" => "test_text",
// 					"std" => "Default Value",
// 					"type" => "text"); 
                                  
// $of_options[] = array( "name" => "Input Checkbox (false)",
// 					"desc" => "Example checkbox with false selected.",
// 					"id" => "example_checkbox_false",
// 					"std" => 0,
// 					"type" => "checkbox");    
                                        
// $of_options[] = array( "name" => "Input Checkbox (true)",
// 					"desc" => "Example checkbox with true selected.",
// 					"id" => "example_checkbox_true",
// 					"std" => 1,
// 					"type" => "checkbox"); 
                                                                           
// $of_options[] = array( "name" => "Normal Select",
// 					"desc" => "Normal Select Box.",
// 					"id" => "example_select",
// 					"std" => "three",
// 					"type" => "select",
// 					"options" => $of_options_select);                                                          

// $of_options[] = array( "name" => "Mini Select",
// 					"desc" => "A mini select box.",
// 					"id" => "example_select_2",
// 					"std" => "two",
// 					"type" => "select2",
// 					"class" => "mini", //mini, tiny, small
// 					"options" => $of_options_radio);    

// $of_options[] = array( "name" => "Input Radio (one)",
// 					"desc" => "Radio select with default of 'one'.",
// 					"id" => "example_radio",
// 					"std" => "one",
// 					"type" => "radio",
// 					"options" => $of_options_radio);
					
// $url =  ADMIN_DIR . 'assets/images/';
// $of_options[] = array( "name" => "Image Select",
// 					"desc" => "Use radio buttons as images.",
// 					"id" => "images",
// 					"std" => "warning.css",
// 					"type" => "images",
// 					"options" => array(
// 						'warning.css' => $url . 'warning.png',
// 						'accept.css' => $url . 'accept.png',
// 						'wrench.css' => $url . 'wrench.png'));
                                        
// $of_options[] = array( "name" => "Textarea",
// 					"desc" => "Textarea description.",
// 					"id" => "example_textarea",
// 					"std" => "Default Text",
// 					"type" => "textarea"); 
                                      
// $of_options[] = array( "name" => "Multicheck",
// 					"desc" => "Multicheck description.",
// 					"id" => "example_multicheck",
// 					"std" => array("three","two"),
// 				  	"type" => "multicheck",
// 					"options" => $of_options_radio);
                                      
// $of_options[] = array( "name" => "Select a Category",
// 					"desc" => "A list of all the categories being used on the site.",
// 					"id" => "example_category",
// 					"std" => "Select a category:",
// 					"type" => "select",
// 					"options" => $of_categories);


/************************************************************************
* SOCIAL OPTIONS
*************************************************************************/

$of_options[] = array( "name" => "Social",
					"type" => "heading"
					);
$of_options[] = array( "name" => "Open Social In",
					"desc" => "You can select to open social links in a new window.",
					"id" => $prefix."social_target",
					"std" => "_blank",
					"type" => "select",
					"class" => "tiny", //mini, tiny, small
					"options" => array(
						"_self" => "_self",
						"_blank" => "_blank",
					));  
					
$of_options[] = array( "name" => "Twitter Link",
					"desc" => "",
					"id" => $prefix."social_twitter",
					"std" => '',
					"type" => "text"); 
$of_options[] = array( "name" => "Facebook Link",
					"desc" => "",
					"id" => $prefix."social_facebook",
					"std" => '',
					"type" => "text"); 
$of_options[] = array( "name" => "Google+ Link",
					"desc" => "",
					"id" => $prefix."social_google",
					"std" => '',
					"type" => "text"); 
$of_options[] = array( "name" => "Flickr Link",
					"desc" => "",
					"id" => $prefix."social_flickr",
					"std" => '',
					"type" => "text");
$of_options[] = array( "name" => "LinkedIn Link",
					"desc" => "",
					"id" => $prefix."social_linkedin",
					"std" => '',
					"type" => "text");
$of_options[] = array( "name" => "Pinterest Link",
					"desc" => "",
					"id" => $prefix."social_pinterest",
					"std" => '',
					"type" => "text");  
$of_options[] = array( "name" => "Dribbble Link",
					"desc" => "",
					"id" => $prefix."social_dribbble",
					"std" => '',
					"type" => "text"); 
$of_options[] = array( "name" => "DeviantArt Link",
					"desc" => "",
					"id" => $prefix."social_deviantart",
					"std" => '',
					"type" => "text");

$of_options[] = array( "name" => "Youtube Link",
					"desc" => "",
					"id" => $prefix."social_youtube",
					"std" => '',
					"type" => "text");
$of_options[] = array( "name" => "Vimeo Link",
				"desc" => "",
				"id" => $prefix."social_vimeo",
				"std" => '',
				"type" => "text");
$of_options[] = array( "name" => "Instagram Link",
				"desc" => "",
				"id" => $prefix."social_instagram",
				"std" => '',
				"type" => "text");
$of_options[] = array( "name" => "Email Address",
				"desc" => "",
				"id" => $prefix."social_email",
				"std" => '',
				"type" => "text");
$of_options[] = array( "name" => "SoundCloud Link",
				"desc" => "",
				"id" => $prefix."social_soundcloud",
				"std" => '',
				"type" => "text"); 
$of_options[] = array( "name" => "Behance Link",
				"desc" => "",
				"id" => $prefix."social_behance",
				"std" => '',
				"type" => "text"); 
$of_options[] = array( "name" => "Ustream Link",
				"desc" => "",
				"id" => $prefix."social_ustream",
				"std" => '',
				"type" => "text");        
$of_options[] = array( "name" => "RSS Link",
				"desc" => "",
				"id" => $prefix."social_rss",
				"std" => '',
				"type" => "text");         

/************************************************************************
* ADVANCED OPTIONS
*************************************************************************/

// $of_options[] = array( "name" => "Advanced Settings",
// 					"type" => "heading");


// $of_options[] = array( "name" => "Folding Checkbox",
// 					"desc" => "This checkbox will hide/show a couple of options group. Try it out!",
// 					"id" => "offline",
// 					"std" => 0,
//           			"folds" => 1,
// 					"type" => "checkbox"); 

// $of_options[] = array( "name" => "Hidden option 1",
// 					"desc" => "This is a sample hidden option 1",
// 					"id" => "hidden_option_1",
// 					"std" => "Hi, I\'m just a text input",
//           			"fold" => "offline", /* the checkbox hook */
// 					"type" => "text");
					
// $of_options[] = array( "name" => "Hidden option 2",
// 					"desc" => "This is a sample hidden option 2",
// 					"id" => "hidden_option_2",
// 					"std" => "Hi, I\'m just a text input",
//           			"fold" => "offline", /* the checkbox hook */
// 					"type" => "text");
// $of_options[] = array( "name" => "Folding Checkbox 2",
// 					"desc" => "This checkbox will hide/show a couple of options group. Try it out!",
// 					"id" => "Slider2",
// 					"std" => 2,
//           			"folds" => 1,
// 					"type" => "checkbox");    

// $of_options[] = array( "name" => "Hidden option 1",
// 					"desc" => "This is a sample hidden option 1",
// 					"id" => "hidden_option_3",
// 					"std" => "Hi, I\'m just a text input",
//           			"fold" => "Slider2", /* the checkbox hook */
// 					"type" => "text");
					
// $of_options[] = array( "name" => "Hidden option 2",
// 					"desc" => "This is a sample hidden option 2",
// 					"id" => "hidden_option_4",
// 					"std" => "Hi, I\'m just a text input",
//           			"fold" => "Slider2", /* the checkbox hook */
// 					"type" => "text");
					
// $of_options[] = array( "name" => "Hello there!",
// 					"desc" => "",
// 					"id" => "hidden_option_4",
// 					"std" => "<h3 style=\"margin: 0 0 10px;\">Grouped Options.</h3>
// 					You can group a bunch of options under a single heading by removing the 'name' value from the options array except for the first option in the group.",
// 					"icon" => true,
// 					"type" => "info");
					
// 					$of_options[] = array( "name" => "Some pretty colors for you",
// 										"desc" => "Color 1.",
// 										"id" => "example_colorpicker_3",
// 										"std" => "#2098a8",
// 										"type" => "color"); 
					
// 					$of_options[] = array( "name" => "",
// 										"desc" => "Color 2.",
// 										"id" => "example_colorpicker_4",
// 										"std" => "#2098a8",
// 										"type" => "color");
										
// 					$of_options[] = array( "name" => "",
// 										"desc" => "Color 3.",
// 										"id" => "example_colorpicker_5",
// 										"std" => "#2098a8",
// 										"type" => "color"); 
										
// 					$of_options[] = array( "name" => "",
// 										"desc" => "Color 4.",
// 										"id" => "example_colorpicker_6",
// 										"std" => "#2098a8",
// 										"type" => "color"); 

					
/************************************************************************
* BACKUP OPTIONS
*************************************************************************/


$of_options[] = array( "name" => "Backup Options",
					"type" => "heading");
					
$of_options[] = array( "name" => "Backup and Restore Options",
                    "id" => "of_backup",
                    "std" => "",
                    "type" => "backup",
					"desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
					);
					
$of_options[] = array( "name" => "Transfer Theme Options Data",
                    "id" => "of_transfer",
                    "std" => "",
                    "type" => "transfer",
					"desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".
						',
					);
					
	}
}
?>
