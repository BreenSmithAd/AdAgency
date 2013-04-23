<?php
/************************************************************************
* Portfolio Template
*************************************************************************/

global $post,$data;
$old = $post;


if(isset($data['nzs_portfolio_orderby']) && isset($data['nzs_portfolio_order'])){
	$portfolio_orderby = $data['nzs_portfolio_orderby'];
	$portfolio_order = $data['nzs_portfolio_order'];
}else{
	$portfolio_orderby = 'date';
	$portfolio_order = 'DESC';
}
$portfolio_query = new WP_Query( array( 'post_type' => 'one_page_portfolio', 'posts_per_page' => -1,'orderby'=>$portfolio_orderby, 'order' => $portfolio_order) ); 
		
		if($portfolio_query->have_posts()): 
?>



<div class="filter">

			<!-- FILTER BEGINS -->

			<ul id="filterOptions">
				<li><a href="#" rel="all" class="color-btn main-btn"><?php _e('All','framework'); ?></a></li>

				<?php

				global $args,$post,$filter_by;

				$args = array('taxonomy' => 'filter');

				$filter_by = get_terms("filter",$args);

				foreach ($filter_by as $handle) {
					echo '<li><a href="#" rel="'.$handle->slug.'" class="color-btn gray">'.$handle->name.'</a></li>';
				}


				?>
			</ul>

			<!-- FILTER ENDS -->

			<span class="gallery-option">
				<a href="#" id="three">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/theme/three.png" alt="">
				</a>
				<a href="#" id="four">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/theme/four.png" alt="">
				</a>
			</span>
		</div>
		

<ul class="holder">


<?php

		if(isset($data['nzs_portfolio_cols']) && !empty($data['nzs_portfolio_cols'])){

			$portfolio_cols = ("4" == $data['nzs_portfolio_cols']) ? 'four columns' : 'one-third column';

		}else{

			$portfolio_cols = 'four columns';
		}


		  while($portfolio_query->have_posts()) : $portfolio_query->the_post();

		  $sort_by = get_the_terms( get_the_ID(), 'filter' );

		  if($sort_by){

		  	$test = array();
		  	foreach ($sort_by as $sorted) {

		  		$type = strtolower(preg_replace('/\s+/', '-', $sorted->slug));

		  		$test[] = strtolower(preg_replace('/\s+/', '-', $sorted->slug));

		  	}

		  	$test = join(' ',$test);
		  	
		  }

		?>

		<!-- GALLERY ITEM -->
		<li class="<?php echo $portfolio_cols;?>" data-id="id-<?php echo get_the_ID();?>" data-type="<?php echo (!empty($type)) ? $test : 'image';?>">
			<div class="gallery-padding">
				<div class="img-frame">
					<div class="image-wrapper">

				<?php 

				if(has_post_thumbnail()){


					$icon_link = '';


					$portfolio_type = get_post_meta( get_the_ID(), 'nzs_portfolio_type', true);

					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'one_page_portfolio-thumbnail');

					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');



					// image gallery
					if('image' == $portfolio_type){

						printf('<a href="%1s" title="%2$s" rel="prettyPhoto[main-%2$s]" class="img-preview"><img src="%3$s" alt="%2$s" class="scale-with-grid" /></a>',
						$large_image_url[0],
						esc_attr(the_title_attribute('echo=0')),
						$thumb[0]);


						$icon_link = ' href="'.$large_image_url[0].'" title="'.esc_attr(the_title_attribute('echo=0')).'" rel="prettyPhoto['.esc_attr(the_title_attribute('echo=0')).']" ';

						$meta = get_post_meta(get_the_ID(), 'nzs_image_fields', true);

						if(is_array($meta)){
	                   
		                    foreach ($meta as $key => $option) {
								
								$image_attributes = wp_get_attachment_image_src( $option ,'large');

		                        if($image_attributes[0]){

		                        	printf('<a href="%1s" title="%2s" rel="prettyPhoto[%3s]" class="img-preview"></a>',
		                        		esc_attr($image_attributes[0]),
		                        		esc_attr(get_the_title($option)),
		                        		the_title_attribute('echo=0'));
		                        }

		                    } //end foreach
	               		}


	               	//  video		
	               	}elseif('video' == $portfolio_type){

	               		$video_link = get_post_meta(get_the_ID(), 'nzs_video_link', true);

	               		$video_link = $video_link ? $video_link.'?iframe=true&width=75%&height=75%' : '';

	               		$icon_link = ' href="'.$video_link.'" title="'.esc_attr(the_title_attribute('echo=0')).'" rel="prettyPhoto['.esc_attr(the_title_attribute('echo=0')).']" ';


	               		if($video_link){
		               		printf('<a href="%1s" title="%2$s" rel="prettyPhoto[iframes]" class="video-preview"><img src="%3$s" alt="%2$s" class="scale-with-grid" /></a>',
		               			esc_attr($video_link),
		               			esc_attr(the_title_attribute('echo=0')),
		               			esc_attr($thumb[0]));
	               		}
						
	               	// single image
	               	}else{

	               		printf('<a href="%1s" title="%2$s" rel="prettyPhoto[%2$s]" class="img-preview"><img src="%3$s" alt="%2$s" class="scale-with-grid" /></a>',
							esc_attr($large_image_url[0]),
							esc_attr(the_title_attribute('echo=0')),
							esc_attr($thumb[0]));

	               	}

				} //ENDS has_post_thumbnail

				?>

				<div class="mouse-effect"></div>

					<span class="extra-links">
						<a <?php echo $icon_link; ?> class="photo-up hide-text">View Images</a>

						<?php
							$external_url = get_post_meta( get_the_ID(), 'nzs_external_link', true);

							if(isset($external_url) && !empty($external_url)){

								echo '<a href="'.esc_attr($external_url).'" target="_blank" class="web-link hide-text">Visit Site</a>';

							}
						?>



					<?php if(isset($data['nzs_hide_portfolio_link']) && 0 == $data['nzs_hide_portfolio_link']): ?>

						<a href="<?php the_permalink(); ?>" class="go-link hide-text">View Details</a>

					<?php endif; ?>

					</span>

				</div>


				<h5><?php the_title();?></h5>
				<?php the_excerpt();?>

				</div>
			</div>
		</li>

	<!-- GALLERY ITEM -->



<?php
		endwhile;
	endif;
$post = $old;
 
?>

</ul>
