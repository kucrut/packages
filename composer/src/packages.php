<?php

return array(
    'packages' => array(
        'gothfox/Tiny-Tiny-RSS' => array(
            '1.11' => array(
                'name'    => 'gothfox/Tiny-Tiny-RSS',
                'version' => '1.11',
                'dist'    => array(
                    'type' => 'zip',
                    'url'  => 'https://github.com/gothfox/Tiny-Tiny-RSS/archive/1.11.zip',
                ),
                'require' => array(
                    'composer/installers'        => '~1.0',
                    'fancyguy/webroot-installer' => '~1.1',
                ),
                'type'    => 'webroot',
                'license' => array(
                    'GPLv2',
                ),
                'authors' => array(
                    array(
                        'name'     => 'Andrew Dolgov',
                        'email'    => '',
                        'homepage' => 'http://fakecake.org/',
                    )
                ),
                'support' => array(
                    'issues' => 'http://tt-rss.org/forum',
                ),
            ),
        ),
        'kucrut/wordpress' => array(
            '3.8.1' => array(
                'name'    => 'kucrut/wordpress',
                'version' => '3.8.1',
                'dist'    => array(
                    'type' => 'tar',
                    'url'  => 'http://wordpress.org/wordpress-3.8.1.tar.gz',
                    'sha1' => '904487e0d70a2d2b6a018aaf99e21608d8f2db88',
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
            '3.8' => array(
                'name' => 'kucrut/wordpress',
                'version' => '3.8',
                'dist' => array(
                    'type' => 'tar',
                    'url' => 'http://wordpress.org/wordpress-3.8.1.tar.gz',
                    'sha1' => '6108e6394b756f0fb62c04939980d5fe29c0b9cc',
                ),
                'require' => array(
                    'php' => '>=5.2.0',
                    'fancyguy/webroot-installer' => '~1.1',
                ),
                'type'    => 'webroot',
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
                    'reference' => 'tip',
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
