<?php

return [
    'enabled' => [
        'buckets' => true,
    ],

    'locale' => 'fr',
    'fallback_locale' => 'fr',

    'publish_date_24h' => true, // enable 24h format in publisher dates
    'publish_date_format' => 'd F Y H:i', // format used by publication date pickers
    'publish_date_display_format' => 'DD MMMM YYYY HH:mm', // format used when displaying the publication date

    'settings' => true,

    'glide' => [
        'original_media_for_extensions' => ['svg'],
    ],

    'block_editor' => [
        'block_single_layout' => 'site.layouts.block', // layout to use when rendering a single block in the editor
        'block_views_path' => 'site.blocks',
        'crops' => [
            'image' => [
                'default' => [
                    [
                        'name' => 'default',
                        // 'ratio' => 16/9,
                        'width' => 992,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ],
    ],

    'buckets' => [
        'homepage' => [
            'name' => 'Home Stats',
            'buckets' => [
                'home_heros' => [
                    'name' => 'Home Hero',
                    'bucketables' => [
                        [
                            'module' => 'homepageHeroes',
                            'name' => 'Homepage Heroes',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 10,
                ],
                'home_stats' => [
                    'name' => 'Home Stats',
                    'bucketables' => [
                        [
                            'module' => 'stats',
                            'name' => 'Stats',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 5,
                ],
                'home_emergency_numbers' => [
                    'name' => 'Home Emergency Numbers',
                    'bucketables' => [
                        [
                            'module' => 'emergencyNumbers',
                            'name' => 'Emergency Numbers',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 4,
                ],
            ],
        ],
    ],
];
