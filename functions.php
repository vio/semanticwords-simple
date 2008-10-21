<?

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

// add actions to WP
add_action( 'wp' , "sw_prepare_theme" );

?>
