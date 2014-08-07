<?php

return array(
	'packages' => array(
		'kucrut/tiny-tiny-rss' => array(
			'1.13' => array(
				'name'    => 'kucrut/tiny-tiny-rss',
				'version' => '1.13',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://github.com/gothfox/Tiny-Tiny-RSS/archive/1.13.zip',
				),
				'require' => array(
					'composer/installers'        => '~1.0',
					'fancyguy/webroot-installer' => '~1.1',
				),
				'type'    => 'webroot',
				'license' => array(
					'GPL-2.0',
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
				'name'    => 'kucrut/tiny-tiny-rss',
				'version' => '1.11',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/gothfox/Tiny-Tiny-RSS.git',
					'reference' => 'tip',
				),
				'require' => array(
					'composer/installers'        => '~1.0',
					'fancyguy/webroot-installer' => '~1.1',
				),
				'type'    => 'webroot',
				'license' => array(
					'GPL-2.0',
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
			'3.9.2' => array(
				'name'    => 'kucrut/wordpress',
				'version' => '3.9.2',
				'dist'    => array(
					'type' => 'tar',
					'url'  => 'http://wordpress.org/wordpress-3.9.2.tar.gz',
					'sha1' => 'http://wordpress.org/wordpress-3.9.2.tar.gz.sha1',
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
			'3.9' => array(
				'name'    => 'kucrut/wordpress',
				'version' => '3.9',
				'dist'    => array(
					'type' => 'tar',
					'url'  => 'http://wordpress.org/wordpress-3.9.tar.gz',
					'sha1' => 'c121c310ac895edf678e8650a02dad796a0a8bc7',
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
