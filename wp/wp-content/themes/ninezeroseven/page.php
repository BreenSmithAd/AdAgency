<?php
/************************************************************************
* Full width page template
*************************************************************************/

get_header(); ?>

<section <?php post_class( 'blog alternate-bg2');?> style="margin-top:80px;" id="blog">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
<!-- 
		<div class="titleBar">
			<span><?php _e('You Are Viewing','framework');?></span>
			<h2><?php the_title();?></h2>
		</div>
 -->

		<div class="sixteen columns posts">

				<!-- POST -->
				<article class="post page-template">

					<div class="content">
						
					<?php the_content(); ?>


					</div>
				</article>	
				<!-- ./END POST -->
				<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>
<?php get_footer(); ?>