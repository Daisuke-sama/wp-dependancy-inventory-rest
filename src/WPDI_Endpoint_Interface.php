<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 22-Mar-18
 * Time: 9:35 PM
 */
namespace WPDI;

/**
 * Interface WPDI_Endpoint_Interface that maps parameters of $args array, which
 * is the third parameter in the register_rest_route() function of WP REST API.
 */
interface WPDI_Endpoint_Interface {
	public function get_callback();
	public function get_args();
	public function get_methods();
	public function get_permission_callback();
}
