<?php


 function load_stylesheets()
 {
 	wp_register_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css',array(), false, 'all');
	wp_enqueue_style('bootstrap');

 	wp_register_style('swiper',  get_template_directory_uri() . '/css/swiper.min.css',array(), false, 'all');
	wp_enqueue_style('swiper');
 
}
 add_action('wp_enqueue_scripts', 'load_stylesheets');

 function load_stylesheetsmain()
 {

   wp_register_style('reset', get_template_directory_uri() . '/reset.css',array(), false, 'all');
   wp_enqueue_style('reset');


	wp_register_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
	wp_enqueue_style('style');

}
 add_action('wp_enqueue_scripts', 'load_stylesheetsmain');



function include_jquery()
{

wp_deregister_script('jquery');
wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js', ' ', 1, true);
add_action('wp_enqueue_scripts', 'jquery');

wp_deregister_script('bootstrap');
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', ' ', 1, true);
add_action('wp_enqueue_scripts', 'bootstrap');

wp_deregister_script('swiper');
wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', ' ', 1, true);
add_action('wp_enqueue_scripts', 'swiper');

}
add_action('wp_enqueue_scripts' , 'include_jquery');

function loadjs(){
wp_register_script ('main' , get_template_directory_uri() .  '/js/main.js' , ' ', 1, true );
 wp_enqueue_script('main');

wp_register_script ('liquidCarousel' , get_template_directory_uri() .  '/js/jquery.liquidCarousel.min.js' , ' ', 1, true );
 wp_enqueue_script('liquidCarousel');

 wp_register_script ('carousel' , get_template_directory_uri() .  '/js/carousel.js' , ' ', 1, true );
 wp_enqueue_script('customjs'); 
	wp_register_script ('customjs' , get_template_directory_uri() .  '/js/carousel.js' , ' ', 1, true );
 wp_enqueue_script('customjs');

 } add_action('wp_enqueue_scripts' , 'loadjs');


/**
 * アイキャッチ画像に対応する
 */
function my_after_setup_theme(){
 // アイキャッチ画像を有効にする
 add_theme_support( 'post-thumbnails' );
 // アイキャッチ画像サイズを指定する（横：640px 縦：384）
 // 画像サイズをオーバーした場合は切り抜き
 set_post_thumbnail_size( 640, 384, true );
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );






if ( function_exists('acf_add_options_page') ) :
	$option_page = acf_add_options_page(array(
		'page_title' => 'ACF スライダー',
		'menu_title' => 'ACF スライダー',
		'menu_slug' => 'acf_slider',
		'capability' => 'edit_posts',
		'redirect' => false
	));
endif ;





add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
