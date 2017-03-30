<?php

// Set Up



// Includes
include(get_template_directory() . '/includes/frontend/enqueue.php');


// Actions & Filter Hooks

/*
 *	Enqueue scripts & styles
 */
add_action('wp_enqueue_scripts', 'ju_enqueue');



// Shortcodes



