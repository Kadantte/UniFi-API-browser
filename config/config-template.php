<?php
/**
 * Copyright © 2024, Art of WiFi
 * www.artofwifi.net
 *
 * @license This file is subject to the MIT license bundled with this package in the file LICENSE.md
 */

/**
 * Configuration instructions
 * ===========================
 * Create a copy of this configuration template file within the same directory, name it config.php and enter your
 * UniFi controller details and credentials below
 *
 * Multi controller configuration options
 * =======================================
 * The number of UniFi controllers that can be added is unlimited, just take care to correctly maintain
 * the array structure by following the PHP syntax shown below.
 *
 * Controller types
 * ================
 * Two types of controllers are supported:
 * - 'classic' (default): uses username/password authentication with the classic UniFi API client
 * - 'official': uses API key authentication with the official UniFi Network Application API client
 *
 * If the 'type' field is omitted, it defaults to 'classic' for backward compatibility.
 */
$controllers = [
    /**
     * Classic controller example (username/password, legacy API client)
     */
    [
        'user'     => 'demo',                    // Username for access to the UniFi Controller
        'password' => 'demo',                    // Password for access to the UniFi Controller
        'url'      => 'https://demo.ui.com:443', // Full URL to the UniFi Controller, e.g., 'https://22.22.11.11:8443'
        'name'     => 'demo.ubnt.com',           // Name for this controller which will be used in the dropdown menu
        'type'     => 'classic',                 // Controller type: 'classic' or 'official' (defaults to 'classic')
    ],
    /**
     * Official API controller example (API key, new Saloon-based API client)
     */
    [
        'api_key'    => 'your-api-key-here',       // API key for the official UniFi Network Application API
        'url'        => 'https://192.168.1.1',     // Full URL to the UniFi Network Application
        'name'       => 'Office (Official API)',   // Name for this controller which will be used in the dropdown menu
        'type'       => 'official',                // Controller type: must be 'official' for API key authentication
        'verify_ssl' => false,                     // Optional: set to false to disable SSL verification (default: true)
    ],
];

$theme = 'bootstrap'; // Your default theme of choice, pick one from the list below:
// bootstrap, cerulean, cosmo, cyborg, darkly, flatly, journal, lumen, paper, readable, sandstone, simplex, slate, spacelab, superhero, united, yeti

$navbar_class    = 'dark';      // Class for the main navigation bar, valid options are: light, dark
$navbar_bg_class = 'dark';      // Class for the main navigation bar background, valid options are: primary, secondary, success, danger, warning, info, light, dark, white, transparent

$debug = false; // Set to true (without quotes) to enable debug output to the browser and the PHP error log
// when fetching the site collection after selecting a controller.
