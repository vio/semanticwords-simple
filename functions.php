<?
/*
 * @TODO - public only non null posts nav links
 *
 */

// ui url
define( SW_UI, get_bloginfo( "template_url" ) . "/ui" );

// theme variables
$sw_heading = "";


// preparing theme 
function sw_prepare_theme() {
	global $sw_heading;

	$_link_attr = "href=\"" . get_option("home") . "\" rel=\"home\" title=\"Go to homepage\"";
	if( is_home() ):
		$sw_heading = "<h1><a " . $_link_attr . ">" . get_option( "blogname" ) . "</a></h1>";
	else:
		$sw_heading = "<a " . $_link_attr . " class=\"logo\">" . get_option( "blogname" ) . "</a>";
	endif;

}

// load php file from include
function sw_include( $file ) {
	$_file_path = TEMPLATEPATH . '/inc/' . $file . '.php';

	if( file_exists( $_file_path ) ) :
		include $_file_path;
	else:
		return 0;
	endif;

}


// add actions to WP
add_action( 'wp' , "sw_prepare_theme" );

// DEBUG - check execution time for optimization
$sw_timer = null;
function sw_timer_start() {
	global $sw_timer;
	 $sw_timer=microtime(true);
}
function sw_timer_stop() {
	global $sw_timer;
	echo 'Exe time = ' . round((microtime(true) - $sw_timer), 4) ;
}

?>
