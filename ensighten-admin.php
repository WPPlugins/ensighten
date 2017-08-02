<?php 


	function ensightenAdminInit() {
		register_setting( 'ensightenTMS', 'ensightenAcct' );
		register_setting( 'ensightenTMS', 'ensightenSpace' );
		register_setting( 'ensightenTMSData', 'ensightenDataSite' );
		register_setting( 'ensightenTMSData', 'ensightenDataUser' );
		register_setting( 'ensightenTMSData', 'ensightenDataPage' );
		register_setting( 'ensightenTMSData', 'ensightenDataConfigured' );

		wp_register_style( 'ensighten-stylesheet', plugins_url( 'ensighten.css', __FILE__ ) );
	}

	function ensighteAdminMenuInit() {
		$page = add_options_page( __( 'Ensighten TMS Settings', 'ensighten' ), __( 'Ensighten Settings', 'ensighten' ), 'manage_options' , 'ensighten', 'ensightenOptions' );
		add_action( 'admin_print_styles-' . $page, 'ensightenAdminStyling' );
	}

	function ensightenAdminStyling() {
		wp_enqueue_style( 'ensighten-stylesheet' );
	}

	function ensightenOptions() {
		include plugin_dir_path( __FILE__ ).'ensighten-options.php';
	}
	
	function ensightenActivate() {
		add_option( 'ensightenAcct', '' );
		add_option( 'ensightenSpace', '' );
		add_option( 'ensightenDataSite', '' );
		add_option( 'ensightenDataUser', '' );
		add_option( 'ensightenDataPage', '' );
		add_option( 'ensightenDataConfigured', '' );
	}

	function ensightenDeactivate() {
		delete_option( 'ensightenAcct' );
		delete_option( 'ensightenSpace' );
		delete_option( 'ensightenDataSite' );
		delete_option( 'ensightenDataUser' );
		delete_option( 'ensightenDataPage' );
		delete_option( 'ensightenDataConfigured' );
	}
	
	register_activation_hook( __FILE__, 'ensightenActivate' );
	register_deactivation_hook( __FILE__, 'ensightenDeactivate' );
	add_action( 'admin_init', 'ensightenAdminInit' );
	add_action( 'admin_menu', 'ensighteAdminMenuInit' );
?>