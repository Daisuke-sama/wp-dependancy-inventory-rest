<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Mar-18
 * Time: 8:16 PM
 */

namespace WPDI\Responses;


use function array_merge;
use function is_array;
use WP_Error;

/**
 * Class WPDI_Status_NotFound represents error NotFound code for
 * the response.
 *
 * Extension of the WP_Error class is for saving consistence of
 * the Wordpress API.
 *
 * @package WPDI\Responses
 */
class WPDI_Status_NotFound extends WP_Error {
	/**
	 * WPDI_Status_NotFound constructor.
	 *
	 * @param string $code
	 * @param string $message
	 * @param array  $data
	 */
	public function __construct( $code = '', string $message = '', array $data ) {
		if ( ! is_array( $data ) ) {
			$data = (array) $data;
		}

		$data = array_merge( $data, [ 'status' => 404 ] );

		parent::__construct( $code, $message, $data );
	}
}
