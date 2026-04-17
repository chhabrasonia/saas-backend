<?php

if (!defined('ABSPATH')) exit;

class Api_Bootstrap
{
    public static function init(): void
    {
        require_once THEME_PATH. '/api/class-response.php';
        require_once THEME_PATH. '/api/class-middleware.php';
        require_once THEME_PATH . '/api/class-routes.php';

        foreach (glob(__DIR__ . '/requests/*.php') as $file) {
            require_once $file;
        }
        
        Routes::init();
    }
}