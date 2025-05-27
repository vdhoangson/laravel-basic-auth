<?php
/* * Laravel Basic Authentication Configuration
 *
 * This configuration file is used to set up basic authentication for your Laravel application.
 * It allows you to protect routes with a simple username and password.
 *
 * @author vdhoangson
 * @link https://github.com/vdhoangson
 */

return [
    'username' => env('BASIC_AUTH_USERNAME', ''),

    'password' => env('BASIC_AUTH_PASSWORD', ''),

    /*
     * The realm for the basic authentication.
     * This is the message displayed in the authentication dialog.
     */
    'realm' => env('BASIC_AUTH_REALM', 'Access denied'),
];
