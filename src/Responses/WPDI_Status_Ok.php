<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Mar-18
 * Time: 7:55 PM
 */

namespace WPDI\Responses;


use WP_REST_Response;

/**
 * Class WPDI_Status_Ok represents success in Response in REST.
 *
 * @package WPDI\Responses
 */
class WPDI_Status_Ok extends WP_REST_Response {
	/**
	 * WPDI_Status_Ok constructor.
	 *
	 * @param mixed|null $data
	 * @param array      $headers
	 */
	public function __construct( mixed $data = null, array $headers = array() ) {
		parent::__construct( $data, 200, $headers );
	}
}
