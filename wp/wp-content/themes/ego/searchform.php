<?php
/**
 * The search form that's usually in the sidebar
 *
 * @package WordPress
 * @subpackage Ego
 * @since Ego 1.0
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="<?php _e('Search', 'ego'); ?>" name="s" id="s" class="txtFld" />
        <input type="submit" id="searchsubmit" class="submit submitTheme submitSmall" value="<?php _e('Find it', 'ego'); ?>" />
    </div>
</form>