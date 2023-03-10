<?php

return [
    'featured' => [
        'title' => 'Features',
        'route' => 'admin.featured.homepage',
        'primary_navigation' => [
            'homepage' => [
                'title' => 'Homepage',
                'route' => 'admin.featured.homepage',
            ],
        ],
    ],

    'content' => [
        'title' => 'Contenu',
        'route' => 'admin.content.news.index',
        'primary_navigation' => [
            'news' => [
                'title' => 'News',
                'module' => true,
            ],

            'pages' => [
                'title' => 'Pages',
                'module' => true,
            ],

            'documents' => [
                'title' => 'Documents',
                'module' => true,
            ],

            'homepageHeroes' => [
                'title' => 'Homepage Heroes',
                'module' => true,
            ],
        ],
    ],



    'other' => [
        'title' => 'Autres',
        'route' => 'admin.other.stats.index',
        'primary_navigation' => [
            'stats' => [
                'title' => 'Statistiques',
                'module' => true,
            ],
            'emergencyNumbers' => [
                'title' => 'Emergency Numbers',
                'module' => true,
            ],
            'interventions' => [
                'title' => 'Interventions',
                'module' => true,
            ],
        ],
    ],

    // 'stats' => [
    //     'title' => 'Statistiques',
    //     'module' => true,
    // ],

    // 'emergencyNumbers' => [
    //     'title' => 'Emergency Numbers',
    //     'module' => true,
    // ],

    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'site'],
        'primary_navigation' => [
            'site' => [
                'title' => 'General',
                'route' => 'admin.settings',
                'params' => ['section' => 'site'],
            ],
        ],
    ],
];
