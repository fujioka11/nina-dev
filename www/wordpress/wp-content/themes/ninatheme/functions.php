<?php
if ( function_exists('register_sidebar') )
	register_sidebar();
?>
<?php add_filter( 'show_admin_bar', '__return_false' ); ?>

<?php add_theme_support('post-thumbnails'); ?>


<!--work-->
<?php add_image_size( '800_thum', 800, 600, true ); ?>



<!--続きを読む-->
<?php

function remove_more_jump_link($link) {
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"',$offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end-$offset);
  }
  return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

?>
