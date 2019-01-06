<?php
/**
 * @package Rentit_Debugger
 * @version 1.0
 */
/*
Plugin Name: Rentit_Debugger
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: Rentit_Extra_Hours
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Debugger
*/
function dbg($var,$id=''){
	echo '<h3>'.$id.'</h3>';
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}
function late_var_dump() {
	//$product_id = isset( $_POST['add-to-cart'] ) ? absint( $_POST['add-to-cart'] ) : '';
	//echo '<h2>_GET</h2><pre>';
	//var_dump( $_GET );
	//echo '</pre>';
	//echo '<h2>_POST</h2><pre>';
	//var_dump( $_POST );
	//echo '</pre>';
	//echo '<h2>_COOKIE</h2><pre>';
	//var_dump( $_COOKIE );
	//echo '</pre>';
	echo '<h2>_SESSION</h2><pre>';
	var_dump( $_SESSION );
	echo '</pre>';
}
//add_action( 'init', 'late_var_dump', 3 );
//add_action( 'wp_footer', 'late_var_dump', 3 );
