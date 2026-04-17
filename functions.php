<?php


if ( ! defined( 'ABSPATH' ) ) exit;

/**
 *****************************************
 * Theme constants
 ****************************************
 */
define( 'THEME_PATH', get_template_directory() );

/**
 ******************************************
 * Theme Bootstrap
 ******************************************
 */
require_once get_template_directory() . '/inc/class-theme-bootstrap.php';
Theme_Bootstrap::init();

/**
 ******************************************
 * API Bootstrap
 ******************************************
 */

require_once get_template_directory() . '/api/class-bootstrap.php';

Api_Bootstrap::init();
