<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Cleanup {

	public static function init() {
        add_action('init', [self::class, 'cleanup']);
    }

	/**
	 * Remove unnecessary WordPress head tags
	 */
	public static function cleanup(): void {
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	}
}
