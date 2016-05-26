<?php

return array(
	'packages' => array(
		'kucrut/bridge' => array(
			'0.1.0' => array(
				'name'    => 'kucrut/bridge',
				'version' => '0.1.0',
				'dist'    => array(
					'type' => 'tar',
					'url'  => 'https://github.com/kucrut/wp-bridge/archive/v0.1.0.tar.gz',
				),
				'require' => array(
					'kucrut/wordpress' => '>=4.5',
					'wp-api/wp-api'    => '>=2.0-beta13.1',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0+',
				),
				'authors' => array(
					array(
						'name' => 'Dzikri Aziz',
						'homepage' => 'https://kucrut.org/',
					),
				),
			),
		),
		'kucrut/kc-settings' => array(
			'2.8.5' => array(
				'name'    => 'kucrut/kc-settings',
				'version' => '2.8.5',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://downloads.wordpress.org/plugin/kc-settings.2.8.5.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0+',
				),
				'authors' => array(
					array(
						'name' => 'Dzikri Aziz',
						'homepage' => 'https://kucrut.org/',
					),
				),
				'support' => array(
					'forum'  => 'https://wordpress.org/support/plugin/kc-settings',
					'issues' => 'https://github.com/kucrut/kc-settings/issues',
					'source' => 'https://github.com/kucrut/kc-settings',
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/kc-settings',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/kucrut/kc-settings.git',
					'reference' => 'master',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type' => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0+',
				),
				'authors' => array(
					array(
						'name'     => 'Dzikri Aziz',
						'homepage' => 'https://kucrut.org/',
					),
				),
				'support' => array(
					'forum'  => 'https://wordpress.org/support/plugin/kc-settings',
					'issues' => 'https://github.com/kucrut/kc-settings/issues',
					'source' => 'https://github.com/kucrut/kc-settings',
				),
			),
		),
		'kucrut/widget-attributes' => array(
			'0.2.1' => array(
				'name'    => 'kucrut/widget-attributes',
				'version' => '0.2.1',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://downloads.wordpress.org/plugin/widget-attributes.0.2.1.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0+',
				),
				'authors' => array(
					array(
						'name' => 'Dzikri Aziz',
						'homepage' => 'https://kucrut.org/',
					),
				),
				'support' => array(
					'forum'  => 'https://wordpress.org/support/plugin/wp-widget-attributes',
					'issues' => 'https://github.com/kucrut/wp-widget-attributes/issues',
					'source' => 'https://github.com/kucrut/wp-widget-attributes',
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/widget-attributes',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/kucrut/wp-widget-attributes.git',
					'reference' => 'master',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0+',
				),
				'authors' => array(
					array(
						'name'     => 'Dzikri Aziz',
						'homepage' => 'https://kucrut.org/',
					),
				),
				'support' => array(
					'forum'  => 'https://wordpress.org/support/plugin/wp-widget-attributes',
					'issues' => 'https://github.com/kucrut/wp-widget-attributes/issues',
					'source' => 'https://github.com/kucrut/wp-widget-attributes',
				),
			),
		),
	),
);
