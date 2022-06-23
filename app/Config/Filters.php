<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use App\Filters\FilterSuperadmin;
use App\Filters\FilterAdministrator;
use App\Filters\FilterGuru;
use App\Filters\FilterTatausaha;
use App\Filters\FilterPesertadidik;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filtersuperadmin'      => FilterSuperadmin::class,
        'filteradministrator'   => FilterAdministrator::class,
        'filterguru'            => FilterGuru::class,
        'filtertatausaha'       => FilterTatausaha::class,
        'filterpesertadidik'    => FilterPesertadidik::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'filtersuperadmin'    =>
            [
                'except' =>
                [
                    'register', 'register/*',
                    'login',    'login/*',
                    'wilayah', 'wilayah/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filteradministrator'    =>
            [
                'except' =>
                [
                    'register', 'register/*',
                    'login',    'login/*',
                    'wilayah', 'wilayah/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filterguru'    =>
            [
                'except' =>
                [
                    'register', 'register/*',
                    'login',    'login/*',
                    'wilayah', 'wilayah/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filtertatausaha'    =>
            [
                'except' =>
                [
                    'register', 'register/*',
                    'login',    'login/*',
                    'wilayah', 'wilayah/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filterpesertadidik'    =>
            [
                'except' =>
                [
                    'register', 'register/*',
                    'login',    'login/*',
                    'wilayah', 'wilayah/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'filtersuperadmin'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'superadmin', 'superadmin/*',
                    'wilayah', 'wilayah/*',
                    'beranda', 'beranda/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filteradministrator'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'administrator', 'administrator/*',
                    'wilayah', 'wilayah/*',
                    'beranda', 'beranda/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filterguru'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'guru', 'guru/*',
                    'wilayah', 'wilayah/*',
                    'beranda', 'beranda/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filtertatausaha'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'tatausaha', 'tatausaha/*',
                    'wilayah', 'wilayah/*',
                    'beranda', 'beranda/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'filterpesertadidik'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'pesertadidik', 'pesertadidik/*',
                    'wilayah', 'wilayah/*',
                    'beranda', 'beranda/*',
                    '/', //Routing Ke Controller Home
                ]
            ],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
