<?php

/*
Plugin Name: My Extension
Plugin URI:
Description: {{Your name}}
Author:
Author URI:
Version: 0.1.0
*/

define( 'MY_EXTENSION_PATH', plugin_dir_path( __FILE__ ) );
define( 'MY_EXTENSION_URL', plugin_dir_url( __FILE__ ) );

add_action( 'wp_enqueue_scripts', 'my_extension_enqueue' );
add_action( 'cornerstone_register_elements', 'my_extension_register_elements' );
add_filter( 'cornerstone_icon_map', 'my_extension_icon_map' );

function my_extension_register_elements() {

	cornerstone_register_element( 'My_First_Element', 'my-first-element', MY_EXTENSION_PATH . 'includes/my-first-element' );
	cornerstone_register_element( 'My_Second_Element', 'my-second-element', MY_EXTENSION_PATH . 'includes/my-second-element' );

	cornerstone_register_element( 'My_Sortable_Element', 'my-sortable-element', MY_EXTENSION_PATH . 'includes/my-sortable-element' );
	cornerstone_register_element( 'My_Sortable_Element_Item', 'my-sortable-element-item', MY_EXTENSION_PATH . 'includes/my-sortable-element-item' );

}

function my_extension_enqueue() {
	wp_enqueue_style( 'my_extension-styles', MY_EXTENSION_URL . '/assets/styles/my-extension.css', array(), '0.1.0' );
}

function my_extension_icon_map( $icon_map ) {
	$icon_map['my-extension'] = MY_EXTENSION_URL . '/assets/svg/icons.svg';
	return $icon_map;
}
