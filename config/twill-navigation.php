<?php

return [
    // 'homepage' => [
    //     'title' => 'Home',
    //     // 'route' => 'homepage',
    //     'buckets' => [
    //         'homepage' => [
    //             'name' => 'Home Stats',
    //             'buckets' => [
    //                 'home_stats' => [
    //                     'name' => 'Home Stats',
    //                     'bucketables' => [
    //                         [
    //                             'module' => 'stats',
    //                             'name' => 'Stats',
    //                             'scopes' => ['published' => true],
    //                         ],
    //                     ],
    //                     'max_items' => 5,
    //                 ],
    //             ],
    //         ],
    //     ],
    // ],

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
];
