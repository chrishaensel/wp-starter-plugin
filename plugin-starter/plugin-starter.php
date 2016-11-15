<?php
/*
Plugin Name: Plugin Starter
Plugin URI: https://chaensel.de/
Description: Plugin Starter Pack
Version: 1.0
Author: Christian Haensel
Author URI: http://www.chaensel.de
License: GPLv2 or later
Text Domain: plugin-starter
*/

/**
 * README
 *
 * Edit the above comment to make this plugin unique
 */

define( "CH_PLUGIN_NAME", "plugin-starter" );


/**
 * This is the first shortcode we can use
 *
 * @return string
 */
function plugin_starter_shortcode_1() {
	// This is just for showing that the shortcut works
	return '<div class="starter-test">This is the output of this shortcode</div>';
}


function plugin_stater_reg_scripts() {
	// Our JS will be loaded AFTER jquery, because with the array at the end of wp_register_script,
	// we are telling WP that we depend on jQuery
	wp_register_script( CH_PLUGIN_NAME , plugins_url( '/js/app.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script ( CH_PLUGIN_NAME );
	wp_enqueue_style  ( CH_PLUGIN_NAME , plugins_url( '/css/app.css', __FILE__ ) );
}

// Enqueueing our scripts and styles
add_action( 'wp_enqueue_scripts', 'plugin_stater_reg_scripts' );

// Adding the shortcode
add_shortcode( 'plugin-starter-1', 'plugin_starter_shortcode_1' );