<?php
/************************************************************************
* Footer File
*************************************************************************/
global $data;

if(!empty($data['nzs_footer_text'])){
	$footer_text = do_shortcode($data['nzs_footer_text']);
}else{
	$footer_text = '&copy; <a href="'.site_url().'">'.get_bloginfo('name').'</a> '. __('All Right Reserved','framework');
}

?>

<section class="footer" id="foot">
	<div class="container">

		<span class="fl"><?php echo $footer_text; ?></span><span class="fr"><a href="#up">^ <?php _e('Top', 'framework');?></a></span>

	</div><!-- ./container -->
</section><!-- ./footer -->





<!-- End Document
================================================== -->

<?php wp_footer(); ?>


</body>
</html>