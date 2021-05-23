<?php 

function add_theme_scripts() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// wp_enqueue_style( 'materialize', get_template_directory_uri() . '/css/materialize.min.css', array(), '5.0', 'all');
   
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', [], 1.1, true);
  
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );