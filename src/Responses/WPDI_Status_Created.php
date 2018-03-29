<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Mar-18
 * Time: 8:10 PM
 */

namespace WPDI\Responses;


use WP_REST_Response;

/**
 * Class WPDI_Status_Created represents response after object was created
 * in the system via REST request.
 *
 * @package WPDI\Responses
 */
class WPDI_Status_Created extends WP_REST_Response {
	/**
	 * WPDI_Status_Created constructor.
	 *
	 * @param mixed|null $data
	 * @param array      $headers
	 */
	public function __construct( mixed $data = null, array $headers = array() ) {
		parent::__construct( $data, 201, $headers );
	}
}
