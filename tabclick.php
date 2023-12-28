<?php
/*
Plugin Name: Tab Click
Plugin URI: https://github.com/hammadmashkoor/TabClick
Description: This is a Custom Tab Click Plugin for Wordpress.
Version: 1.0
Author: Hammad Mashkoor
*/

function plugin_name_scripts() {

wp_enqueue_script( 'script', plugins_url('js/trigger.js', __FILE__), array('jquery'));
}
add_action('init', 'plugin_name_scripts');
?>