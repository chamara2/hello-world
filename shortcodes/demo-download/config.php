<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Demo Download', '{domain}' ),
    'title_template' => '{{-title}}{{ if (o.btn_title) { }} : <strong>{{= o.btn_title}}</strong>{{ } }}',
    'description' => __( 'Add a Download Demo', '{domain}' ),
    'tab'           => __('Demo Elements', '{domain}'),

	'popup_size' => 'medium',
);
