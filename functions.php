<?php
add_action( 'after_setup_theme', 'ngtheme_setup' );

if ( ! function_exists('ngtheme_setup') ):
function ngtheme_setup() {

	// Aktiverar stöd för thumbnails i temat
	add_theme_support( 'post-thumbnails' );
	
	// Registrerar stöd för WP3-meny
	register_nav_menus( array( 'primary' => __( 'Huvudmeny', 'ngtheme' ) ) );
}
endif;

function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
       global $post;
	return '...<a href="'. get_permalink($post->ID) . '"><br />[Läs mer]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*function rosdagen_the_content($content)
{
	$c = '<p class="left post_content">';
	$c .= $content;
	$c .= '</p>';
	return $c;
}
*/
//add_filter('the_content', 'rosdagen_the_content');

if ( function_exists('register_sidebar') ){
    register_sidebar(array('name'=>'About',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
    ));
    register_sidebar(array('name'=>'Navigation','before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
    ));
    register_sidebar(array('name'=>'Main sponsor',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
    ));
}
?>