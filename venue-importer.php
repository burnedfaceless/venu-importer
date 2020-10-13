<?php

/**
 * Plugin name: The Events Calendar Venue Importer
 * Description: Imports places from Google Places as Venues for The Events Calendar plugin.
 * Version: 1.0
 * Author: Brian Abbott
 * Author URI: http://brianabbott.com
 * License: GPL v2
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

include_once ( ABSPATH . 'wp-admin/includes/plugin.php');

//if ( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) {
//	echo '<h1>Hello World!</h1>';
//} else {

// If this file is called directly, abort
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Include the dependencies needed to instantiate the plugin
foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
	include_once $file;
}

add_action( 'plugins_loaded', 'vi_custom_admin_settings' );
/**
 * Starts the plugin
 * @since 1.0.0
 */

function vi_custom_admin_settings() {
	$plugin = new Menu( new MenuPage( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) );
	$plugin->init();
}