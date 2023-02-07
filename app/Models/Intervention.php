<?php

namespace App\Models;

use A17\Twill\Models\Model;

class Intervention extends Model
{
    protected $dates = [
        'date',
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
        'type',
        'date',
        'village',
    ];
}
