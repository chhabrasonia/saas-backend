<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Security {

	/**
	 * Disable XML-RPC and hide the users REST endpoint
	 */
	public static function init() {
		add_filter( 'xmlrpc_enabled', '__return_false' );

		add_filter( 'rest_endpoints', function ( $endpoints ) {
			unset( $endpoints['/wp/v2/users'] );
			return $endpoints;
		} );
	}
}

// Basic rate limiting — uncomment to enable:
//
// add_action( 'rest_api_init', function () {
//     $ip  = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
//     $key = 'rate_' . md5( $ip );
//
//     $count = get_transient( $key ) ?: 0;
//
//     if ( $count > 100 ) {
//         wp_die( 'Too many requests', 429 );
//     }
//
//     set_transient( $key, $count + 1, 60 );
// } );
