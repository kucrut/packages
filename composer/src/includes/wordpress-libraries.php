<?php

return array(
	'packages' => array(
		'kucrut/kumis' => array(
			'dev-master' => array(
				'name'    => 'kucrut/kumis',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/kucrut/wp-kumis.git',
					'reference' => 'master',
				),
				'require' => array(
					'mustache' => '~2.5',
				),
				'type'    => 'library',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'Dzikri Aziz',
						'homepage' => 'http://kucrut.org/',
					),
				),
			),
		),
	),
);
