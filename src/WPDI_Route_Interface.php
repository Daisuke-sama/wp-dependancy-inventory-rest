<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 22-Mar-18
 * Time: 9:50 PM
 */

namespace WPDI;

/**
 * Interface WPDI_Route_Interface defines a complete REST route with
 * a specific endpoint.
 */
interface WPDI_Route_Interface {
	/**
	 * REST namespace for this plugin.
	 */
	const namespace = 'wpdi/v1';

	/**
	 * The function defines custom endpoint in the namespace.
	 *
	 * @return string
	 */
	public function get_endpoint_path();
}
