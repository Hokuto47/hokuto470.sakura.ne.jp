<?php

function load_stylesheets(){
	wp_register_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css',array(), false, 'all');
	wp_enqueue_style('bootstrap');
	
	wp_register_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
	wp_enqueue_style('style');
	
	wp_register_style('index', get_template_directory_uri() . '/index.css',array(), false, 'all');
	wp_enqueue_style('index');
	
	wp_register_style('common2017', get_template_directory_uri() . '/common2017.css',array(), false, 'all');
	wp_enqueue_style('common2017');
}
 	add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', ' ', 1, true);
	add_action('wp_enqueue_scripts', 'jquery');
} 
add_action('wp_enqueue_scripts' , 'include_jquery');

function loadjs(){
 	wp_register_script ('customjs' , get_template_directory_uri() .  '/js/scripts.js' , ' ', 1, true );
 	wp_enqueue_script('customjs');
	
 	wp_register_script ('shareanalytic' , get_template_directory_uri() .  '/js/share-analytic.min.js' , ' ', 1, true );
 	wp_enqueue_script('shareanalytic');
	
 	wp_register_script ('loopimage' , get_template_directory_uri() .  '/js/loop-image.min.js' , ' ', 1, true );
 	wp_enqueue_script('loopimage');
	
 	wp_register_script ('liquidcarouseL' , get_template_directory_uri() .  '/js/liquid-carouseL.min.js' , ' ', 1, true );
 	wp_enqueue_script('liquidcarouseL');
	
 	wp_register_script ('eventclass' , get_template_directory_uri() .  '/js/event-class.min.js' , ' ', 1, true );
 	wp_enqueue_script('eventclass');
	
 	wp_register_script ('coverimage' , get_template_directory_uri() .  '/js/cover-image.min' , ' ', 1, true );
 	wp_enqueue_script('coverimage');
}

add_action('wp_enqueue_scripts' , 'loadjs');
add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

	
	
		array(
				'top-menu' => __('Top Menu', 'theme'),
				'footer-menu' => __('footer Menu', 'theme'),
			
		)
); 


add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
