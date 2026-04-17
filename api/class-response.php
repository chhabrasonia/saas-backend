<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Response {

	/**
	 **************************************
	 * Return a 200 success response
	 * @param  array  $data
	 * @param  string $message
	 * @return WP_REST_Response
	 **************************************
	 */
	public static function success( $data = [], $message = 'Success' ): WP_REST_Response {
		return new WP_REST_Response( [
			'success' => true,
			'data'    => $data,
		], 200 );
	}

	/**
	 ********************************************
	 * Return an error response
	 * @param  string $message
	 * @param  int    $code    HTTP status code
	 * @return WP_REST_Response
	 *******************************************
	 */
	public static function error( $message = 'Error', $code = 400 ): WP_REST_Response {
		return new WP_REST_Response( [
			'success' => false,
			'message' => $message,
		], $code );
	}
}
