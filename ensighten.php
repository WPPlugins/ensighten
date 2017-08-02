<?php
/*
Plugin Name: Ensighten
Plugin URI: http://www.ensighten.com
Description: Includes the Ensighten Bootstrap file and data layer onto your website.
Version: 1.0.1
Author: Matt Latimer
Author URI: http://www.ensighten.com
Text Domain: ensighten
*/


define( 'ENSIGHTEN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if ( is_admin() ) {
	function ensighten_plugin_settings_link($links) { 
	  $settings_link = '<a href="options-general.php?page=ensighten&tab=basic">Settings</a>'; 
	  array_unshift($links, $settings_link); 
	  return $links; 
	}
 
	$plugin = plugin_basename(__FILE__); 
	add_filter("plugin_action_links_$plugin", 'ensighten_plugin_settings_link' );
	require_once( ENSIGHTEN__PLUGIN_DIR . 'ensighten-admin.php' );
}else {
	require_once( ENSIGHTEN__PLUGIN_DIR . 'ensighten-bootstrap.php' );
}