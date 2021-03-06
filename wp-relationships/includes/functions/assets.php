<?php

/**
 * Relationships Assets
 *
 * @package Plugins/Relationships/Assets
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue admin scripts
 *
 * @since 0.1.0
 */
function wp_relationships_admin_enqueue_scripts() {

	// Enqueue core scripts
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script( 'postbox' );

	// Only if not generally enqueing
	if ( 'admin_enqueue_scripts' !== current_action() ) {
		wp_enqueue_script( 'dashboard' );
	}

	// Set location & version for scripts & styles
	$src = wp_relationships_get_plugin_url();
	$ver = wp_relationships_get_asset_version();

	// Styles
	wp_enqueue_style( 'wp-relationships', $src . 'assets/css/relationships.css', array(), $ver );
	wp_enqueue_script( 'wp-relationships', $src . 'assets/js/relationships.js' , array( 'jquery' ), $ver, true );
}
