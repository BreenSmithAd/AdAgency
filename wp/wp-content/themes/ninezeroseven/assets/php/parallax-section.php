<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'parallax-section.php' == basename($_SERVER['SCRIPT_FILENAME'])){
	die ('This file can not be accessed directly!');
}

?>

<section class="parallax <?php echo get_post_type();?>-<?php echo get_the_ID();?>" id="<?php echo get_post_type();?>-<?php echo get_the_ID();?>">
	<div class="container message">
		<?php

		the_content();
		
		?>
	</div>
</section>