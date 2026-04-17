<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Theme_Bootstrap {

	/**
	 *******************************************
	 * Entry point — called from functions.php
	 *******************************************
	 */
	public static function init() {
		self::load_files();
		self::boot_core();
	}

	/**
	 **********************************
	 * Require all theme class files
	 **********************************
	 */
	private static function load_files() {
		$files = [
			// CORE
			'class-theme.php',
			'class-cleanup.php',
			'class-security.php',
			// ACF
			'class-options-page.php',
		];
		foreach ( $files as $file ) {
			$path = THEME_PATH. '/inc/' . $file;
			if ( file_exists( $path ) ) {
				require_once $path;
			}
		}
	}

	/**
	 ******************************
	 * Boot core theme systems
	 ******************************
	 */
	private static function boot_core() {
		Theme::init();
		Security::init();
		Cleanup::init();
		if ( class_exists( 'Options_Page' ) ) {
			Options_Page::init();
		}
	}
}
