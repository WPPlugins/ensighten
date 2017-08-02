<?php 
	function ensightenInject() {

		$ensightenAcct = get_option( 'ensightenAcct' );
		$ensightenSpace = get_option( 'ensightenSpace' );
		
		/* Generate and inject the data layer object */
		require_once( ENSIGHTEN__PLUGIN_DIR . 'ensighten-data.php' );
		
		/* Inject the Bootstrap.js file */
		if ( ( !empty( $ensightenAcct ) ) && ( !empty( $ensightenSpace ) ) ) {
			/* We have an account id and space id available */
			echo ensightenOutputData();
			echo "<script type=\"text/javascript\" src=\"//nexus.ensighten.com/{$ensightenAcct}/{$ensightenSpace}/Bootstrap.js\"></script>\n";
		}else if(!empty( $ensightenAcct )){
			/* We have an account id available */
			echo ensightenOutputData();
			echo "<script type=\"text/javascript\" src=\"//nexus.ensighten.com/{$ensightenAcct}/Bootstrap.js\"></script>\n";
		
		}

	}
	add_action( 'wp_head', 'ensightenInject', 0 );

?>