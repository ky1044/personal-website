<?php 

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


// function includejquery(){
// 		wp_deregister_script('jquery');

// 		wp_enqueue_script('jquery',get_template_directory_uri(),'js/jquery-3.3.1.min.js','',1,true);

// 		add_action('wp_enqueue_scripts','jquery');

// }
// add_action('wp_enqueue_scripts','includejquery');



function theme_add_bootstrap() {
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


// function load_stylesheets()
// {
// 		wp_register_style('bootstrap', get_template_directory_uri() , '/css/bootstrap.min.css', array(), false, 'all');
// 		wp_enqueue_style('bootstrap');


// 		wp_register_style('style',get_template_directory_uri() . '/style.css', array(), false, 'all');
// 		wp_enqueue_style('style');


// }
// add_action('wp_enqueue_scripts','load_stylesheets');




function loadjs() {
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true);
	// wp_register_script('customjs',get_template_directory_uri(),'/js/scripts.js','',1,true);
	// wp_enqueue_script('customjs');


}


add_action('wp_enqueue_scripts','loadjs');


add_theme_support('menus');



register_nav_menus(

	array(
			'top-menu'=>__('Top Menu', 'theme'),
			'footer-menu'=>__('Footer Menu', 'theme')
	)

);

