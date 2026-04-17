<?php

if (!defined('ABSPATH')) exit;

class Options_Page
{
    public static function init() {
        add_action('acf/init', [self::class, 'register']);
    }

    public static function register() {
        if (!function_exists('acf_add_options_page')) {
            return;
        }
        acf_add_options_page([
            'page_title' => 'Site Settings',
            'menu_title' => 'Site Settings',
            'menu_slug'  => 'site-settings',
            'capability' => 'manage_options',
            'redirect'   => false,
        ]);
    }
}