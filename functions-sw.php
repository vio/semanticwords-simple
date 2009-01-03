<?php

/**
 * SW theme functions
 */


/**
 * Define constants
 * SW_UI - path to user interface files(images/javascripts/css)
 */
define( SW_UI, get_bloginfo( "template_url" ) . "/ui" );


/**
 * Theme logo switcher, use h1 only for homepage
 */
$sw_heading = "";
function sw_prepare_theme() {
	global $sw_heading;

	$_link_attr = "href=\"" . get_option("home") . "\" rel=\"home\" title=\"Go to homepage\"";
	if( is_home() ):
		$sw_heading = "<h1><a " . $_link_attr . ">" . get_option( "blogname" ) . "</a></h1>";
	else:
		$sw_heading = "<a " . $_link_attr . " class=\"logo\">" . get_option( "blogname" ) . "</a>";
	endif;
}
add_action( 'wp' , "sw_prepare_theme" );


/** 
 * Function used by SW to include files 
 */
function sw_include( $file ) {
	$_file_path = TEMPLATEPATH . '/inc/' . $file . '.php';

	if( file_exists( $_file_path ) ) :
		include $_file_path;
	else:
		return 0;
	endif;
}




/**
 * Get post date
 */
function sw_the_date($format = 'F jS, Y', $before = '', $after = '', $echo = true){
	the_date($format, $before, $after, $echo);
}

/**
 * Get post datetime
 */
function sw_the_time($format = 'F jS, Y \a\t H:i', $before = '', $after = '', $echo = true){
	the_time($format, $before, $after, $echo);
}

/**
 * Get date design pattern 
 */
function sw_the_date_ddp($format='Y-m-d', $before = '', $after = '', $echo = true){
	the_date($format, $before, $after, $echo);
}

/**
 * Get datetime design pattern 
 */
function sw_the_time_ddp($format='Y-m-d\TH:i:s', $before = '', $after = '', $echo = true){
	the_time($format, $before, $after, $echo);
}


?>
