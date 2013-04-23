<?php

/************************************************************************
* Page Sections template
*************************************************************************/

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'page-sections.php' == basename($_SERVER['SCRIPT_FILENAME'])){

		die ('This file can not be accessed directly!');

	}

	global $bg;


	$section_style_image = get_post_meta(get_the_ID(), 'nzs_section_bg_image', TRUE);
	$section_style_color = get_post_meta(get_the_ID(), 'nzs_section_bg_color', TRUE);



	if( $bg == 'alternate-bg1' ){
		$bg = 'alternate-bg2';
	}else{
		$bg = 'alternate-bg1';
	}	


	if(!empty($section_style_image) || !empty($section_style_color)){

		$bg = '';	
	}

	$current_ID = get_the_ID();

?>

	<section class="gallery <?php echo get_post_type();?>-<?php the_ID();?> <?php echo (isset($bg)) ? $bg : '';?>" id="<?php echo $post->post_name;?>">
		<div class="container">

			<?php

			the_content();

			?>

		</div> <!-- ./container -->
	</section> <!-- ./services -->

<?php

	$has_parallax = get_post_meta($current_ID, 'nzs_parallax_attach', TRUE);

	if( $has_parallax && $has_parallax !='none' ){

		global $tmp_post;

		$tmp_post = $post;
		
		$parallax_post = get_post($has_parallax); 

		setup_postdata( $parallax_post );
		$post = $parallax_post;

		get_template_part('assets/php/parallax-section');


		wp_reset_postdata();

		$post = $tmp_post;
	}

?>