<?php

return [
    'homepage' => [
        'title' => 'Home',
        'route' => 'homepage',

    ],

    'featured' => [
        'title' => 'Features',
        'route' => 'twill.featured.homepage',
        'primary_navigation' => [
            'homepage' => [
                'title' => 'Homepage',
                'route' => 'twill.featured.homepage',
            ],
        ],
    ],

    'stats' => [
        'title' => 'Statistiques',
        'module' => true,
    ],

];
