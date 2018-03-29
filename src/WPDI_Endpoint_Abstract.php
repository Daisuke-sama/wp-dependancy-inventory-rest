<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 22-Mar-18
 * Time: 9:57 PM
 */

namespace WPDI;

use WP_REST_Request;

/**
 * Class WPDI_Endpoint_Abstract defines base behaviour
 * for Wordpress REST API endpoints.
 *
 * @package WPDI
 */
abstract class WPDI_Endpoint_Abstract implements WPDI_Route_Interface, WPDI_Endpoint_Interface {
	/**
	 * Returns the callback for REST API endpoint.
	 *
	 * @return array
	 */
	final public function get_callback() {
		return [ $this, 'respond' ];
	}

	/**
	 * Defines a response to REST API endpoint.
	 *
	 * @param WP_REST_Request $request
	 *
	 * @return mixed
	 */
	abstract public function respond(WP_REST_Request $request);
}
