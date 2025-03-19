<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Constantes del child theme
define( 'REXDIGITAL_VERSION', '1.0.0' );
define( 'REXDIGITAL_ADMIN_ROLE', 'cliente_rexdigital' ); // Rol de usuario personalizado

define( 'REXDIGITAL_THEME_URL', get_stylesheet_directory_uri() );
define( 'REXDIGITAL_ADMIN_URL', REXDIGITAL_THEME_URL . '/admin/' );
define( 'REXDIGITAL_ADMIN_CSS', REXDIGITAL_ADMIN_URL . '/css/' );

// Encolar estilos del tema padre
function rexdigital_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'rexdigital_enqueue_styles' );

function rexdigital_enqueue_admin_styles() {
    wp_enqueue_style( 'admin-style', REXDIGITAL_ADMIN_CSS . 'admin-style.css' );
}
add_action( 'wp_enqueue_scripts', 'rexdigital_enqueue_admin_styles' );

// Aquí puedes añadir otras funciones personalizadas para el child theme
// ...