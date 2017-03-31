<?php

// Set Up
add_theme_support('menus');


// Includes
include(get_template_directory() . '/includes/frontend/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/frontend/widgets.php');

// Actions & Filter Hooks

/*
 *	Enqueue scripts & styles
 */
add_action('wp_enqueue_scripts', 'ju_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
add_action('widgets_init', 'ju_widgets');



// Shortcodes



