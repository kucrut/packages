<?php

return array(
	'packages' => array(
		'kucrut/writr' => array(
			'1.0.7' => array(
				'name'    => 'kucrut/writr',
				'version' => '1.0.7',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/writr.1.0.7.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '~3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0+',
				),
				'authors' => array(
					array(
						'name'     => 'Automattic',
						'homepage' => 'http://automattic.com/',
					),
				),
			),
		),
	),
);
