<?php

/************************************************************************
* Page sections for page/post
*************************************************************************/

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'page-sections.php' == basename($_SERVER['SCRIPT_FILENAME'])){

	die ('This file can not be accessed directly!');
}

?>

<section class="gallery alternate-bg1 <?php echo get_post_type();?>-<?php echo get_the_ID();?>" id="<?php echo $post->post_name;?>">
	<div class="container">
		<?php

		the_content();

		?>
	</div> <!-- ./container -->
</section> <!-- ./services -->
