<?php 

/*
 * @company name : Eight25Media
 * @auther : Dasun Bandara
 * @date : 22/04/2018
 * @description : Include css and js files
 */

if (!defined('FW')) die('Forbidden');

$base_statics = '/shortcodes/base-button/static/';
$shortcodes_extension = fw()->extensions->get('core');

wp_enqueue_style(
	'base-button',
	$shortcodes_extension->get_uri( $base_statics . 'css/styles.css' )
);

