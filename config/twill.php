<?php

return [
    'enabled' => [
        'buckets' => true,
    ],

    'locale' => 'fr',
    'fallback_locale' => 'en',

    'publish_date_24h' => true, // enable 24h format in publisher dates
    'publish_date_format' => 'd F Y H:i', // format used by publication date pickers
    'publish_date_display_format' => 'DD MMMM YYYY HH:mm', // format used when displaying the publication date

    'buckets' => [
        'homepage' => [
            'name' => 'Home Stats',
            'buckets' => [
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
            ],
        ],
    ],
];
