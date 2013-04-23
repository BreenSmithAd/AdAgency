<?php
/**
 * The template for displaying Comments.
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */
?>

<div id="comments" <?php if ( is_user_logged_in() ) { echo 'class="user_logged_in"'; } ?>>
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'ego' ); ?></p>
</div><!-- #comments -->
<?php
return;
endif;
?>

<?php if ( have_comments() ) : ?>
	<h3 id="comments-title"><?php
	printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'ego' ),
	number_format_i18n( get_comments_number() ));
	?></h3>

	<ol class="comment_list">
		<?php wp_list_comments('max_depth=2&callback=udt_comment'); ?>
		<?php //wp_list_comments(); ?>
	</ol>
	
	<div style="float:left;clear:both;width:100%;"></div>
	
	<?php
	function comment_pagination() {
		//read the page links but do not echo
		$comment_page = paginate_comments_links('echo=0');
	
		//if there are page links, echo the navigation div and the page links
		if (!empty($comment_page)) {
			echo "<p class=\"comment-pagination\">\n";
			echo $comment_page;
			echo "\n</p>\n";
		}
	}
	
	//comment_pagination();
	?>
	
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<div class="comment-pagination">
			<div class="nav-previous"><?php previous_comments_link( __( '&lt; Older Comments', 'ego' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &gt;', 'ego' ) ); ?></div>
		</div>
	<?php endif; // check for comment navigation ?>

<?php endif; // end have_comments() ?>

<?php

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

if(esc_attr($commenter['comment_author'])!='') { $val_author = esc_attr( $commenter['comment_author'] ); } else { $val_author = __( 'Name', 'ego' ); }
if(esc_attr($commenter['comment_author_email'])!='') { $val_author_email = esc_attr( $commenter['comment_author_email'] ); } else { $val_author_email = __( 'E-mail', 'ego' ); }
if(esc_attr($commenter['comment_author_url'])!='' && esc_attr($commenter['comment_author_url'])!='http://') { $val_author_url = esc_attr( $commenter['comment_author_url'] ); } else { $val_author_url = 'http://'; }

$fields =  array(
	'author' => '<ul class="left"><li><input id="author" name="author" class="txtFld required" type="text" value="' . $val_author . '" size="30"' . $aria_req . ' /></li>',
	'email'  => '<li><input id="email" name="email" class="txtFld required" type="text" value="' . $val_author_email . '" size="30"' . $aria_req . ' /></li>',
	'url'    => '<li><input id="url" name="url" class="txtFld" type="text" value="' . $val_author_url . '" size="30" /></li></ul>',
);
$comments_args = array(
		'fields'=>$fields,
		// change the title of comemnt form
		'title_reply'=>'Drop a comment',
		'title_reply_to'=>'Leave a Reply to %s',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_notes_after'=>'',
		'comment_field'=>'<ul class="left" style="width:100%; margin-right:0;"><li style="width:100%;"><textarea id="comment" name="comment" class="txtAra comment required" cols="32" rows="8" aria-required="true"></textarea><div style="float:left;clear:both;"></div></li></ul>',
);
comment_form($comments_args);

?>

</div>