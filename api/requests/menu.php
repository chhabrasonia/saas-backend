<?php

if (!defined('ABSPATH')) exit;

/**
 *****************************
 * GET Menus Data
 * @param $request
 * 
 *****************************
 */
function get_menu_data(WP_REST_Request $request) {
    $locations = get_nav_menu_locations();

    $response = [];
    
    foreach($locations as $type => $menu_id) {
        $collection = [];
        $menu_items = wp_get_nav_menu_items( $menu_id );
        foreach ($menu_items as $menu) {
            $item = [
                'id'       => $menu->ID,
                'title'    => $menu->title,
                'url'      => $menu->url,
                'target'   => $menu->target,
                'description' => $menu->description,
                'children' => []
            ];

            if ($menu->menu_item_parent) {
                $collection[$menu->menu_item_parent]['children'][] = $item;
            } 
            else {
                $collection[$menu->ID] = $item;
            }
        }

        $response[$type] = array_values($collection); 
    }


    return Response::success($response);
}