<?php
/**
 * Plugin Name: API Data Plugin
 * Description: A custom plugin to fetch and display data from an external API.
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: api-data-plugin
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include core files.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-data-fetcher.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-data-shortcode.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-data-settings.php';

// Initialize the plugin.
function api_data_plugin_init() {
    new API_Data_Settings();
    new API_Data_Shortcode();
}
add_action( 'plugins_loaded', 'api_data_plugin_init' );

function api_data_enqueue_assets() {
    wp_enqueue_style(
        'api-data-style',
        plugins_url( '/assets/css/style.css', __FILE__ )
    );

    wp_enqueue_script(
        'api-data-script',
        plugins_url( '/assets/js/script.js', __FILE__ ),
        [ 'jquery' ],
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'api_data_enqueue_assets' );