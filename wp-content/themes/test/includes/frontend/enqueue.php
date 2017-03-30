<?php

function ju_enqueue(){
	wp_register_style('ju_bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.css');
	wp_register_style('ju_main', get_template_directory_uri() . '/assets/styles/main.css');
	wp_register_style('ju_roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900');
	wp_register_style('ju_roboto_mono', 'http://fonts.googleapis.com/css?family=Roboto+Mono:400,300,700');
	wp_register_style('ju_font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

	


	wp_enqueue_style('ju_bootstrap');
	wp_enqueue_style('ju_main');
	wp_enqueue_style('ju_roboto');
	wp_enqueue_style('ju_roboto_mono');
	wp_enqueue_style('ju_font_awesome');
}