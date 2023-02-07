<?php

namespace App\Models;

use A17\Twill\Models\Model;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Behaviors\HasMedias;
use Illuminate\Database\Eloquent\Builder;
use A17\Twill\Models\Behaviors\HasPosition;

class Stat extends Model implements Sortable
{
    use HasMedias;
    use HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $mediasParams = [
        'icon' => [
            'default' => [
                [
                    'name' => 'default',
                ],
            ],
        ],
    ];
}
