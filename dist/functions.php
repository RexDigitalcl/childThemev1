<?php
/**
 * Theme functions and definitions.
 *
 * @package Rexdigital
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'REXDIGITAL_VERSION', '1.0.0' );

/**
 * Load admin scripts & styles.
 *
 * @return void
 */
function rexdigital_admin_scripts_styles() {

    wp_enqueue_style(
        'rexdigital-admin-style',
        get_stylesheet_directory_uri() . '/assets/css/admin-style.css',
        [],
        REXDIGITAL_VERSION
    );

}
add_action( 'admin_enqueue_scripts', 'rexdigital_admin_scripts_styles' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function rexdigital_scripts_styles() {

    wp_enqueue_style(
        'rexdigital-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        [
            'hello-elementor-theme-style',
        ],
        REXDIGITAL_VERSION
    );

}
add_action( 'wp_enqueue_scripts', 'rexdigital_scripts_styles', 20 );
?>