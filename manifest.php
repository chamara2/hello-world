<?php if (!defined('FW')) die('Forbidden');

$manifest = array(
    'name'          => "Hello world",
	'version'       => '1.0.0',
	'display'       => true,
	'standalone'    => true,
	'author'        => "chmara buddika",
	'requirements'  => array(
		'extensions'  => array(
			'builder' => array(),
		),
	)
);

$manifest['github_repo'] = 'https://gitlab.com/basemaster/hello-world';