<?php

return array(
	'packages' => array(
		'automattic/akismet' => array(
			'3.1.2' => array(
				'name'    => 'automattic/akismet',
				'version' => '3.1.2',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/akismet.3.1.2.zip',
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
						'name'     => 'Automattic',
						'homepage' => 'http://automattic.com/',
					),
				),
			),
		),
		'kucrut/debug-bar' => array(
			'0.8.2' => array(
				'name'    => 'kucrut/debug-bar',
				'version' => '0.8.2',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/debug-bar.0.8.2.zip',
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
						'name'     => 'WordPress.org',
						'homepage' => 'http://w.org/',
					),
				),
			),
		),
		'yoast/google-analytics-for-wordpress' => array(
			'5.2.7' => array(
				'name'    => 'yoast/google-analytics-for-wordpress',
				'version' => '5.2.7',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/google-analytics-for-wordpress.5.2.7.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-3.0',
				),
				'authors' => array(
					array(
						'name' => 'Joost de Valk',
						'homepage' => 'http://yoast.com/',
					),
				),
			),
		),
		'automattic/jetpack' => array(
			'3.5.3' => array(
				'name'    => 'automattic/jetpack',
				'version' => '3.5.3',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/jetpack.3.5.3.zip',
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
						'name'     => 'Automattic',
						'homepage' => 'http://automattic.com/',
					),
				),
			),
		),
		'kucrut/log-deprecated-notices' => array(
			'0.3' => array(
				'name'    => 'kucrut/log-deprecated-notices',
				'version' => '0.3',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/log-deprecated-notices.0.3.zip',
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
						'name' => 'Andrew Nacin',
						'homepage' => 'http://nacin.com/',
					),
				),
			),
		),
		'kucrut/media-placeholders' => array(
			'0.9.2' => array(
				'name'    => 'kucrut/media-placeholders',
				'version' => '0.9.2',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/media-placeholders.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'X-Team',
						'homepage' => 'http://x-team.com/wordpress/',
					),
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/media-placeholders',
				'version' => 'dev-master',
				'source'  => array(
					'type'      => 'git',
					'url'       => 'https://github.com/x-team/wp-media-placeholders.git',
					'reference' => 'master',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'X-Team',
						'homepage' => 'http://x-team.com/wordpress/',
					),
				),
			),
		),
		'kucrut/prism-wp' => array(
			'1.0.0' => array(
				'name'    => 'kucrut/prism-wp',
				'version' => '1.0.0',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/prism-wp.1.0.0.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'Nico Amarilla',
						'homepage' => 'http://www.codefleet.net/',
					),
				),
			),
		),
		'kucrut/regenerate-thumbnails' => array(
			'2.2.4' => array(
				'name'    => 'kucrut/regenerate-thumbnails',
				'version' => '2.2.4',
				'dist'    => array(
					'type' => 'zip',
					'url' => 'http://downloads.wordpress.org/plugin/regenerate-thumbnails.2.2.4.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name' => 'Viper007Bond',
						'homepage' => 'http://www.viper007bond.com/',
					),
				),
			),
		),
		'kucrut/rewrite-rules-inspector' => array(
			'1.2.1' => array(
				'name'    => 'kucrut/rewrite-rules-inspector',
				'version' => '1.2.1',
				'dist'    => array(
					'type' => 'zip',
					'url' => 'http://downloads.wordpress.org/plugin/rewrite-rules-inspector.1.2.1.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name' => 'Automattic',
						'homepage' => 'http://automattic.com/',
					),
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/rewrite-rules-inspector',
				'version' => 'dev-master',
				'dist'    => array(
					'type'      => 'git',
					'url'       => 'https://github.com/Automattic/Rewrite-Rules-Inspector.git',
					'reference' => 'tip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name'     => 'Automattic',
						'homepage' => 'http://automattic.com/',
					),
				),
			),
		),
		'10up/simple-page-ordering' => array(
			'2.2.4' => array(
				'name'    => '10up/simple-page-ordering',
				'version' => '2.2.4',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/simple-page-ordering.2.2.4.zip',
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
						'name' => 'Jake Goldman',
					),
					array(
						'name'     => '10up',
						'homepage' => 'http://10up.com/',
					),
				),
			),
		),
		'kucrut/theme-check' => array(
			'20141222.1' => array(
				'name'    => 'kucrut/theme-check',
				'version' => '20141222.1',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/theme-check.20141222.1.zip',
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
						'name'     => 'Simon Prosser',
						'homepage' => 'http://profiles.wordpress.org/pross/',
					),
					array(
						'name'     => 'Samuel Wood',
						'homepage' => 'http://profiles.wordpress.org/otto42/',
					),
				),
			),
		),
		'kucrut/tinycoffee' => array(
			'0.2.0' => array(
				'name'    => 'kucrut/tinycoffee',
				'version' => '0.2.0',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/tinycoffee.0.2.0.zip',
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
						'name'     => 'Arūnas Liuiza',
					),
					array(
						'name'     => 'Dzikri Aziz',
						'homepage' => 'http://kucrut.org/',
					),
				),
			),
			'0.1.2' => array(
				'name'    => 'kucrut/tinycoffee',
				'version' => '0.1.2',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/tinycoffee.0.1.2.zip',
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
						'name'     => 'Arūnas Liuiza',
					),
					array(
						'name'     => 'Dzikri Aziz',
						'homepage' => 'http://kucrut.org/',
					),
				),
			),
			'dev-master' => array(
				'name'    => 'kucrut/tinycoffee',
				'version' => 'dev-master',
				'dist'    => array(
					'type'      => 'git',
					'url'       => 'https://github.com/ideag/tiny_coffee.git',
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
						'name'     => 'Arūnas Liuiza',
					),
					array(
						'name'     => 'Dzikri Aziz',
						'homepage' => 'http://kucrut.org/',
					),
				),
			),
		),
		'kucrut/w3-total-cache' => array(
			'0.9.4.1' => array(
				'name'    => 'kucrut/w3-total-cache',
				'version' => '0.9.4.1',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/w3-total-cache.0.9.4.1.zip',
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
						'name'     => 'Frederick Townes',
						'homepage' => 'http://www.linkedin.com/in/w3edge',
					),
				),
			),
			'0.9.3' => array(
				'name'    => 'kucrut/w3-total-cache',
				'version' => '0.9.3',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/w3-total-cache.0.9.3.zip',
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
						'name'     => 'Frederick Townes',
						'homepage' => 'http://www.linkedin.com/in/w3edge',
					),
				),
			),
		),
		'kucrut/wordpress-importer' => array(
			'0.6.1' => array(
				'name'    => 'kucrut/wordpress-importer',
				'version' => '0.6.1',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/wordpress-importer.0.6.1.zip',
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
						'name'     => 'WordPress.org',
						'homepage' => 'http://w.org/',
					),
				),
			),
		),
		'yoast/wordpress-seo' => array(
			'2.2.1' => array(
				'name'    => 'yoast/wordpress-seo',
				'version' => '2.2.1',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/wordpress-seo.2.2.1.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-3.0',
				),
				'authors' => array(
					array(
						'name' => 'Joost de Valk',
						'homepage' => 'http://yoast.com/',
					),
				),
			),
		),
		'yoast/yoast-comment-hacks' => array(
			'1.0' => array(
				'name'    => 'yoast/yoast-comment-hacks',
				'version' => '1.0',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/yoast-comment-hacks.1.0.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-3.0',
				),
				'authors' => array(
					array(
						'name' => 'Joost de Valk',
						'homepage' => 'http://yoast.com/',
					),
				),
			),
		),
		'mcguffin/wp-rainbow-hilite' => array(
			'1.0.5' => array(
				'name'    => 'mcguffin/wp-rainbow-hilite',
				'version' => '1.0.5',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/wp-rainbow-hilite.1.0.5.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name' => 'Jörn Lund',
						'homepage' => 'https://github.com/mcguffin',
					),
				),
			),
		),
		'griffinjt/soliloquy-lite' => array(
			'2.1.4' => array(
				'name'    => 'griffinjt/soliloquy-lite',
				'version' => '2.1.4',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/soliloquy-lite.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name' => 'Thomas Griffin',
						'homepage' => 'http://profiles.wordpress.org/griffinjt/',
					),
				),
			),
		),
		'topher1kenobe/shy-posts' => array(
			'1.3.2' => array(
				'name'    => 'topher1kenobe/shy-posts',
				'version' => '1.3.2',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'http://downloads.wordpress.org/plugin/shy-posts.1.3.2.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name' => 'Topher Derosia',
						'homepage' => 'http://codeventure.net',
					),
				),
			),
		),
		'jtsternberg/code-snippets-cpt' => array(
			'1.0.4' => array(
				'name'    => 'jtsternberg/code-snippets-cpt',
				'version' => '1.0.4',
				'dist'    => array(
					'type' => 'zip',
					'url'  => 'https://downloads.wordpress.org/plugin/code-snippets-cpt.zip',
				),
				'require' => array(
					'kucrut/wordpress' => '>=3.8',
				),
				'type'    => 'wordpress-plugin',
				'license' => array(
					'GPL-2.0',
				),
				'authors' => array(
					array(
						'name' => 'Justin Sternberg',
						'homepage' => 'http://jtsternberg.com/about',
					),
				),
			),
		),
	),
);
