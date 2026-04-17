<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Theme {

	/**
	 * Hook into WordPress theme setup
	 */
	public static function init() {
		add_action( 'after_setup_theme', [ self::class, 'setup' ] );
		add_action( 'init', [ self::class, 'init_hooks' ] );
	}

	/**
	 * Declare theme support and register nav menus
	 */
	public static function setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'menus' );

		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		] );

		register_nav_menus( [
			'header' => __( 'Header Menu', 'saas-theme' ),
			'footer' => __( 'Footer Menu', 'saas-theme' ),
		] );
	}

	/**
	 * Misc init-time filters
	 */
	public static function init_hooks() {
		add_filter( 'use_block_editor_for_post', '__return_false' );
		add_filter( 'show_admin_bar', '__return_false' );
	}
}
