<?php
/**
 * This file is part of the O2System PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */
// ------------------------------------------------------------------------

use O2System\Kernel\Datastructures\Config;

$presenter = new Config( [], Config::STD_OFFSET );

/**
 * Presenter Enabled
 *
 * Auto start presenter as framework service.
 */
$presenter->enabled = false;

/**
 * Presenter Debug Toolbar
 *
 * @var bool
 */
$presenter->debugToolBar = false;

/**
 * Presenter Theme
 *
 * @var string
 */
$presenter->theme = false;

/**
 * Presenter SocialGraph
 *
 * @var string
 */
$presenter->socialGraph = false;

/**
 * Presenter Assets
 *
 * @var array
 */
$presenter->assets = [

    /**
     * Webpack assets
     *
     * @var bool
     */
    'webpack'  => false,

    // --------------------------------------------------------------------

    /**
     * Autoload view assets
     *
     * @var array
     */
    'autoload' => [
        'head' => [
            'css'   => [  ],
            'fonts' => [ 
                'font-awesome',
                'https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Oxygen:400,700'
            ],
        ],
        'body' => [
            'js' => [
                'jquery.js',
                'jquery-migrate.js'
            ],
        ],
        'packages' => [
            'jquery-ui',
            'bootstrap' => [
                'libraries' => [
                    'popper'
                ]
            ],
            'tinymce',
            'o2system-ui' => [
                'themes' => 'multipurpose'
            ]
        ]
    ],

    // --------------------------------------------------------------------
];