<?php
/**
 * The Header of our theme.
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ego' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php
if(returnOptionValue('favicon')!='') {
	echo '<link rel="shortcut icon" href="'.returnUploadedImageByID('favicon').'" />'."\n";
}

include_once('g-fonts.php');

$usedFonts=array();
if(!in_array(returnOptionValue('title_font'),$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts[returnOptionValue('title_font')][2].'" />'."\n";
	$usedFonts[]=returnOptionValue('title_font');
}
if(!in_array(returnOptionValue('title_font_variation'),$usedFonts)) {
	echo '<link rel="stylesheet" href="'.$g_fonts[returnOptionValue('title_font_variation')][2].'" />'."\n";
	$usedFonts[]=returnOptionValue('title_font_variation');
}
?>

<?php
if(returnOptionValue('css_editor')!='') {
	echo '<style type="text/css">'."\n";
	echo stripslashes(html_entity_decode(returnOptionValue('css_editor'),ENT_QUOTES))."\n";
	echo '</style>'."\n";
}
?>

<?php if(returnOptionValue('google_tracking_id')!='') { ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo returnOptionValue('google_tracking_id'); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php } ?>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>
<body <?php body_class(); ?>>

<!--start wrapper-->
<div id="wrapper">

	<?php
	$my_args_header = array(
		'post_type' => 'udt_homepage_slider',
		'numberposts' => 1
	);
	$header_slides = get_posts( $my_args_header );
	$count_header_slides = count($header_slides);
	?>
	
	<!--start header-->
	<?php if(is_front_page() && !is_home() && $count_header_slides>0) { ?>
	<div class="header header-main">
	<?php } else { ?>
	<div class="header">
	<?php } ?>
		<div class="inner">
			<div class="logo-container">
				<div class="logo">
					<a class="navigateTo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo returnUploadedImageByID('site_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
				</div>
			</div>            
			
			<!--mobileMenu toggle-->
			<div class="mobileMenuToggle"><a href=""></a></div>
	
			<!--navigation-->
			<?php wp_nav_menu( array( 'container' => 'div', 'container_class' => 'menu', 'theme_location' => 'primary', 'depth' => 1 ) ); ?>
			
		</div>
	</div>
	<!--end header-->