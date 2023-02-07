<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class HomepageHero extends Model implements Sortable
{
    use HasMedias;
    use HasPosition;

    protected $fillable = [
        'published',
        'title',
        'hero_text',
        'position',
    ];

    public $mediasParams = [
        'hero' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
    ];
}
