<?php

return array(
	'packages' => array(
		'levito/tt-rss-feedly-theme' => array(
			'v1.0' => array(
				'name'        => 'levito/tt-rss-feedly-theme',
				'description' => 'Feedly theme for Tiny Tiny RSS 1.8+',
				'version'     => 'v1.0',
				'dist'        => array(
					'type' => 'tar',
					'url'  => 'https://github.com/levito/tt-rss-feedly-theme/archive/v1.0.tar.gz',
				),
				'require'     => array(
					'kucrut/tiny-tiny-rss' => '<=1.11',
				),
				'type'        => 'ttrss-plugin',
				'license'     => array(
					'WTFPL',
				),
				'authors'     => array(
					array(
						'name'     => 'Veit Lehmann',
						'homepage' => 'https://github.com/levito',
					),
				),
			),
			'dev-master' => array(
				'name'        => 'levito/tt-rss-feedly-theme',
				'description' => 'Feedly theme for Tiny Tiny RSS 1.8+',
				'version'     => 'dev-master',
				'dist'        => array(
					'type'      => 'git',
					'url'       => 'https://github.com/levito/tt-rss-feedly-theme.git',
					'reference' => 'tip',
				),
				'require'     => array(
					'kucrut/tiny-tiny-rss' => '<=1.11',
				),
				'type'        => 'ttrss-plugin',
				'license'     => array(
					'WTFPL',
				),
				'authors'     => array(
					array(
						'name'     => 'Veit Lehmann',
						'homepage' => 'https://github.com/levito',
					),
				),
			),
		),
	),
);
