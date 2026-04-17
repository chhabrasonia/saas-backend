<?php

if (!defined('ABSPATH')) exit;

class Middleware {

    /**
     *******************************
     * Get Stored Key
     *******************************
    */
    private static function getKey() {
        return defined('SAAS_API_KEY') ? SAAS_API_KEY : null;
    }

    /**
     ******************************************
     * Validate API key from request headers
     * @param  $request
	 * @return true|WP_Error
	 ******************************************
    */
    public static function validate($request) {
        
        $requestKey = $request->get_header('x-api-secret');

        $storedKey  = self::getKey();

        if (!$storedKey || !$requestKey || !hash_equals($storedKey, $requestKey)) {

            return new WP_Error(
                'unauthorized',
                'Invalid API Key',
                ['status' => 401]
            );
        }

        return true;
    }
}