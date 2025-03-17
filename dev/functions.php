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
 * Load child theme scripts & styles.
 *
 * @return void
 */
function rexdigital_scripts_styles() {

    wp_enqueue_style(
        'rexdigital-style',
        get_stylesheet_directory_uri() . 'style.css',
        [
            'hello-elementor-theme-style',
        ],
        REXDIGITAL_VERSION
    );

}
add_action( 'wp_enqueue_scripts', 'rexdigital_scripts_styles', 20 );
?>