<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('&raquo;', true, 'right' );?></title>

	<!-- Mobile Specific Metas
  ================================================== -->

  	<?php global $data; ?>

	<?php if(isset($data['nzs_responsive_layout']) && 0 == $data['nzs_responsive_layout']): ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php endif; ?>

		<!-- CSS
  ================================================== -->


	<?php

	 	if(!empty($data['nzs_custom_favicon'])):
	 	
	 		echo '<link rel="icon" href="'.$data['nzs_custom_favicon'].'">';

	 	endif;
  	?>
  	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- Primary Page Layout
	================================================== -->

<div id="up"></div>

<!-- TOP BAR -->

<section class="topBar <?php echo nzs_menu_class();?>" id="top">
	<div class="container">

		<?php 

			if(isset($data['nzs_plain_text_logo']) && 0 == $data['nzs_plain_text_logo']){
				$use_logo = " class=\"hide-text\"";
			}
		 ?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<h1<?php echo (isset($use_logo)) ? $use_logo : ''?>><?php echo bloginfo('name');?></h1>
		</a>

		<nav class="mainMenu">
			<?php wp_nav_menu( array( 'container' => '','menu_id'=> 'main-menu', 'theme_location' => 'primary','fallback_cb'=> '') );?>
		</nav>

		<!-- DROP DOWN MENU -->

		<?php echo  ninezeroseven_wp_drop_menu();?>

		<!-- DROP DOWN ENDS -->

	</div> <!-- ./container -->
</section> <!-- ./topBar -->

<!-- ENDS TOP BAR -->

<?php
echo nzs_show_header();
?>

