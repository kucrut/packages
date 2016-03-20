<?php

return array(
	'packages' => array(
		'kucrut/tt-rss' => array(
			'20160320' => array(
				'name'    => 'kucrut/tt-rss',
				'version' => '20160320',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://github.com/kucrut/tt-rss/archive/20160320.zip',
				),
				'require' => array(
					'php'                        => '>=5.4.0',
					'composer/installers'        => '^1.0',
					'vlucas/phpdotenv'           => '^2.0',
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
		'kucrut/ttrss-reader' => array(
			'0.3.1' => array(
				'name'    => 'kucrut/ttrss-reader',
				'version' => '0.3.1',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://github.com/kucrut/ttrss-reader/archive/0.3.1.zip',
				),
				'require' => array(
					'composer/installers' => '^1.0',
				),
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'Dzikri Aziz',
						'email'    => 'kvcrvt@gmail.com',
						'homepage' => 'http://kucrut.org/',
					),
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/ttrss-reader',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/kucrut/ttrss-reader.git',
					'reference' => 'tip',
				),
				'require' => array(
					'composer/installers' => '^1.0',
				),
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'Dzikri Aziz',
						'email'    => 'kvcrvt@gmail.com',
						'homepage' => 'http://kucrut.org/',
					),
				),
			),
		),
		'kucrut/wordpress' => array(
			'4.4.2' => array(
				'name'    => 'kucrut/wordpress',
				'version' => '4.4.2',
				'dist'    => array(
					'type' => 'tar',
					'url'  => 'http://wordpress.org/wordpress-4.4.2.tar.gz',
					'sha1' => 'http://wordpress.org/wordpress-4.4.2.tar.gz.sha1',
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
