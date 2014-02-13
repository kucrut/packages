<?php

return array(
	'packages' => array(
		'levito/tt-rss-feedly-theme' => array(
			'v1.0' => array(
				'name'        => 'levito/tt-rss-feedly-theme',
				'description' => 'Feedly theme for Tiny Tiny RSS 1.8+',
				'version'     => 'v1.0',
				'dist'        => array(
					'type' => 'zip',
					'url'  => 'https://github.com/levito/tt-rss-feedly-theme/archive/v1.0.zip',
				),
				'require'     => array(
					'composer/installers'  => '~1.0',
					'kucrut/tiny-tiny-rss' => '<=1.11',
				),
				'type'        => 'ttrss-theme',
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
					'composer/installers'  => '~1.0',
					'kucrut/tiny-tiny-rss' => '<=1.11',
				),
				'type'        => 'ttrss-theme',
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
