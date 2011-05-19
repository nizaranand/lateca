<?php
require_once(TEMPLATEPATH . '/TSfunctions.php'); 
if ( function_exists('register_sidebars') )
    register_sidebars(2);

// Works inside of the Loop
function function_name() {
global $post;
$thePostID = $post->ID;
}
// Custom 404
	register_sidebar( array(
		'name' => '404',
		'id' => '404',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
?>