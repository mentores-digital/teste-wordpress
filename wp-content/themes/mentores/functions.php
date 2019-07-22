<?php
require_once get_stylesheet_directory() . '/includes/Main.php';

function mentores_script_insert() {
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/styles/main.css', array(), '1.0', false);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/scripts/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mentores_script_insert');