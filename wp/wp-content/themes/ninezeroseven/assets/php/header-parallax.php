<?php
/************************************************************************
 * Parallax Header File
 *************************************************************************/ 

global $data;
?>

<section class="para fullheader entry" id="header-option"<?php if(is_admin_bar_showing()){echo ' style="margin-top:-28px"';} ?>>
	<div class="container message">

		<?php if(isset($data['nzs_parallax_logo_image']) && !empty($data['nzs_parallax_logo_image'])): ?>

			<img src="<?php echo $data['nzs_parallax_logo_image']; ?>" class="header-logo scale-with-grid"/> <br/>

		<?php endif; ?>

		<?php if(!empty($data['nzs_parallax_heading_text'])): ?>

			<h2><?php echo $data['nzs_parallax_heading_text'];?></h2><br/>

		<?php endif; ?>

		<?php if(!empty($data['nzs_parallax_description_text'])): ?>

			<p><?php echo $data['nzs_parallax_description_text'];?></p>

		<?php endif; ?>

	</div>
	<?php if( function_exists('nzs_social_links') ){ ?>

		<div class="social">
			<?php echo nzs_social_links();?>
		</div>

	<?php }?>
</section>