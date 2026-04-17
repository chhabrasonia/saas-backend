<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Routes {

	/**
	 ******************************************
	 * Hook all REST API routes
	 ******************************************
	 */
	public static function init(){
        add_action('rest_api_init', [self::class, 'register']);
    }
	/**
	 ******************************************
	 * Register all REST API routes
	 ******************************************
	 */
	public static function register(): void {

		// GET pages data
		register_rest_route( 'v1', '/pages/(?P<slug>[a-zA-Z0-9-]+)', [
			'methods'             => 'GET',
			'callback'            => 'get_page_data',
			'permission_callback' => [ Middleware::class, 'validate' ],
		]);

		// GET Options data
		register_rest_route( 'v1', '/options', [
			'methods'             => 'GET',
			'callback'            => 'get_options_data',
			'permission_callback' => [ Middleware::class, 'validate' ],
		]);

		// GET Menu data
		register_rest_route( 'v1', '/menu', [
			'methods'             => 'GET',
			'callback'            => 'get_menu_data',
			'permission_callback' => [ Middleware::class, 'validate' ],
		]);
	}
}
