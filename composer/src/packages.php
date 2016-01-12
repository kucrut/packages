<?php

return array(
	'packages' => array(
		'kucrut/tt-rss' => array(
			'20160112' => array(
				'name'    => 'kucrut/tt-rss',
				'version' => '20160112',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://github.com/kucrut/tt-rss/archive/20160112.zip',
				),
				'require' => array(
					'composer/installers'        => '~1.0',
					'fancyguy/webroot-installer' => '~1.1',
				),
				'type'    => 'webroot',
				'license' => array(
					'GPL-3.0',
				),
				'authors' => array(
					array(
						'name'     => 'Andrew Dolgov',
						'email'    => '',
						'homepage' => 'http://fakecake.org/',
					),
				),
				'support' => array(
					'issues' => 'http://tt-rss.org/forum',
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/tt-rss',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/kucrut/tt-rss.git',
					'reference' => 'tip',
				),
				'require' => array(
					'composer/installers'        => '~1.0',
					'fancyguy/webroot-installer' => '~1.1',
				),
				'type'    => 'webroot',
				'license' => array(
					'GPL-3.0',
				),
				'authors' => array(
					array(
						'name'     => 'Andrew Dolgov',
						'email'    => '',
						'homepage' => 'http://fakecake.org/',
					),
				),
				'support' => array(
					'issues' => 'http://tt-rss.org/forum',
				),
			),
		),
		'kucrut/wordpress' => array(
			'4.4.1' => array(
				'name'    => 'kucrut/wordpress',
				'version' => '4.4.1',
				'dist'    => array(
					'type' => 'tar',
					'url'  => 'http://wordpress.org/wordpress-4.4.1tar.gz',
					'sha1' => 'http://wordpress.org/wordpress-4.4.1tar.gz.sha1',
				),
				'require' => array(
					'php' => '>=5.2.0',
					'fancyguy/webroot-installer' => '~1.1',
				),
				'type' => 'webroot',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(),
				'support' => array(),
			),
			'dev-master' => array(
				'name'    => 'kucrut/wordpress',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'git://develop.git.wordpress.org/',
					'reference' => 'master',
				),
				'require' => array(
					'php' => '>=5.2.0',
					'fancyguy/webroot-installer' => '~1.1',
				),
				'type' => 'webroot',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(),
				'support' => array(),
			),
		),
	),
);
