<?php
/************************************************************************
* Author Template
*************************************************************************/

get_header(); ?>

<section class="blog alternate-bg2" style="margin-top:80px;" id="blog">
	<div class="container">
		<div class="titleBar">
			<span><?php _e('You Are Viewing','framework');?></span>
			<h2><?php printf( __( 'Post By: %s', 'framework' ), get_the_author_meta('display_name')); ?></h2>
		</div>

		<div class="two-thirds column posts">
			<div class="leftpadding ajaxed">

				<?php
				if(have_posts()): while(have_posts()) : the_post(); 
				
				?>
				
				<!-- POST -->
				<article class="post">
					<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
					<div class="meta">
						<ul>
							<li class="date"><?php echo get_the_date(get_option('date_format'))?></li>
							<li class="user">By <?php the_author_posts_link(); ?></li>
							<li class="postin">in <?php the_category(', ') ?></li>
							<li class="comments"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></li>
						</ul>
					</div>

					<div class="content">
						
					<?php the_excerpt(); ?>

					</div>
					<div class="readmore">
						<?php

						printf('<a href="%1s" class="color-btn main-btn">%2s</a>',
							get_permalink(),
							__('Read More &raquo;','framework')
							);
						 
						?>
					</div>
				</article>	
				<!-- ./END POST -->

			<?php
			endwhile;
			endif; 
					if(get_next_posts_link( $label = null, $wp_query->max_num_pages)){

						next_posts_link( sprintf(__("&laquo; Older Posts By %s","framework"),get_the_author_meta('display_name')), $wp_query->max_num_pages);

					}

					if(get_previous_posts_link( $label = null, $wp_query->max_num_pages )){
						
						previous_posts_link( sprintf(__("Newer Posts By %s &raquo;","framework"),get_the_author_meta('display_name')), $wp_query->max_num_pages);
					
					}
				?>
			</div>
			<div id="contentinner"></div>
		</div>

		<?php
		get_sidebar(); 
		?>
	</div>
</section>
<?php get_footer(); ?>