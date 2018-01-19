<?php
//======================================================
//=================   Chargement des scripts   =========
//======================================================
define('LGMAC_VERSION', '1.0.1');

// Chargement dans le front-end
function lgmac_scripts() {

	// Chargement des styles
	wp_enqueue_style( 'lgmac_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), LGMAC_VERSION, 'all');
	wp_enqueue_style( 'lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap-core'), LGMAC_VERSION, 'all');

	// Chargement des scripts
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), LGMAC_VERSION, true); 
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper-js'), LGMAC_VERSION, true); 		
	wp_enqueue_script( 'lgmac_admin_script', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap-js'), LGMAC_VERSION, true); 
	

}// fin function lgmac_scripts

add_action('wp_enqueue_scripts', 'lgmac_scripts');


// Chargement dans l'admin
function lgmac_admin_scripts() {

	// Chargement des styles
	wp_enqueue_style( 'bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), LGMAC_VERSION);
}// fin function lgmac_scripts

add_action('admin_init', 'lgmac_admin_scripts');

//======================================================
//======================  Utilitaires   ================
//======================================================
function lgmac_setup(){

	//support des vignettes image à la une
	add_theme_support('post-thumbnails');

	//enlève générateur de version wordpress
	remove_action('wp_head', 'wp_generator');

	//enlève les guillemets à la française
	//remove_filter('the_content', 'wptexturize');

	//affichage du tittle
	add_theme_support('title-tag');

	//Register custom navigation walker
	require_once('includes/class-wp-bootstrap-navwalker.php');

	//active la gestion des menus
	register_nav_menus(array('primary' => 'principal'));



}// fin function lgmac_setup

add_action('after_setup_theme', 'lgmac_setup');




