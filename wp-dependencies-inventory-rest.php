<?php

/*
Plugin Name: Wp Dependencies Inventory Rest
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Pavel_Burylichau
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

/**
 * The function is for register of a specific endpoint for Wordpress REST API.
 *
 * @param \WPDI\WPDI_Endpoint_Abstract $endpoint
 */
function wpdi_register_endpoint( \WPDI\WPDI_Endpoint_Abstract $endpoint ) {
	register_rest_route( \WPDI\WPDI_Endpoint_Abstract::namespace, $endpoint->get_endpoint_path(), [
		'args'                => $endpoint->get_args(),
		'callback'            => $endpoint->get_callback(),
		'methods'             => $endpoint->get_methods(),
		'permission_callback' => $endpoint->get_permission_callback()
	] );
}

/**
 * The function is for register the entire route of Wordpress REST API.
 */
function wpdi_register_route() {
	$endpoints = [
		'plugins',
		'themes'
	];

	foreach ( $endpoints as $endpoint ) {
		wpdi_register_endpoint( $endpoint );
	}
}

add_action( 'rest_api_init', 'wpdi_register_route' );
