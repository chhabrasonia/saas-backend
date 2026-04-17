<?php

if (!defined('ABSPATH')) exit;


/**
 *****************************
 * GET Site Settings Data
 * 
 *****************************
 */
function get_options_data() {
    $data = function_exists('get_fields') ? get_fields('option') : [];
    return Response::success([
        'settings' => $data
    ]);
}

