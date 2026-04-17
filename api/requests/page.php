<?php

if (!defined('ABSPATH')) exit;

/**
 *****************************
 * GET Pages Data
 * @param $request
 * 
 *****************************
 */
function get_page_data(WP_REST_Request $request) {
    
    $slug = $request->get_param('slug');

    //Find page by slug
    $page = get_page_by_path($slug, OBJECT, 'page');

    if (!$page) {
        return Response::error('Page not found', 404);
    }

    //Get ACF fields
    $acf_fields = function_exists('get_fields') ? get_fields($page->ID) : [];

    // Return response
    return Response::success([
        'id'    => $page->ID,
        'slug'  => $page->post_name,
        'title' => $page->post_title,
        'data'  => $acf_fields,
    ]);

}