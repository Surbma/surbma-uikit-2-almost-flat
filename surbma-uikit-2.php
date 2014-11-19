<?php

/*
Plugin Name: Surbma - UIkit 2
Plugin URI: http://surbma.hu/bovitmenyek/
Description: UIkit 2 - A lightweight and modular front-end framework.
Version: 1.0.0
Author: Surbma
Author URI: http://surbma.hu/
License: GPL2
*/

function surbma_uikit_2_enqueue_scripts() {
	wp_enqueue_script( 'uikit-scripts', plugins_url( '', __FILE__ ) . '/js/uikit-min.js', array( 'jquery' ), '2.11.1', true );
	wp_enqueue_style( 'uikit-styles', plugins_url( '', __FILE__ ) . '/css/uikit.css', false, '2.11.1' );
}
add_action( 'wp_enqueue_scripts', 'surbma_uikit_2_enqueue_scripts' );

global $allowedposttags;
$allowedposttags['a'] = array(
	'href' => array(),
	'rel' => array(),
	'rev' => array(),
	'name' => array(),
	'target' => array(),
	'data-uk-toggle' => array()
);
$allowedposttags['button'] = array(
	'disabled' => array(),
	'name' => array(),
	'type' => array(),
	'value' => array(),
	'data-uk-toggle' => array()
);
$allowedposttags['ul'] = array(
	'type' => array(),
	'data-uk-nav' => array(),
	'data-uk-tab' => array(),
	'data-uk-switcher' => array(),
	'data-uk-switcher-item' => array()
);
$allowedposttags['div'] = array(
	'align' => array(),
	'dir' => array(),
	'lang' => array(),
	'xml:lang' => array(),
	'data-uk-switcher' => array()
);

