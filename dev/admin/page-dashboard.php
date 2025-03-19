<?php
/**
 * Template Name: Dashboard
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/*
if ( ! current_user_can( REXDIGITAL_ADMIN_ROLE ) ) {
    wp_die( 'No tienes permiso para acceder a esta página.' );
}*/

get_header();

?>

<?php //include( REXDIGITAL_ADMIN_URL . 'partials/admin-top.php' ); ?>

<div class="cliente-dashboard">

<?php include( get_stylesheet_directory() . '/admin/partials/admin-menu.php' ); ?>
    <div class="cliente-content">
        <h1>Dashboard</h1>
        <div class="dashboard-widgets">
            <div class="widget">
                <h2>Widget 1</h2>
                <p>Contenido del widget 1.</p>
            </div>
            <div class="widget">
                <h2>Widget 2</h2>
                <p>Contenido del widget 2.</p>
            </div>
            <div class="widget">
                <h2>Widget 3</h2>
                <p>Contenido del widget 3.</p>
            </div>
        </div>
    </div>

</div>

<?php

get_footer();

?>