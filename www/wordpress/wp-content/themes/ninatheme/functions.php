<?php
if ( function_exists('register_sidebar') )
	register_sidebar();
?>
<?php
add_filter( 'show_admin_bar', '__return_false' );
?>
<?php
add_theme_support('post-thumbnails');
set_post_thumbnail_size(800,600);
?>
