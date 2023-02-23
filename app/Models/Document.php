<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Document extends Model implements Sortable
{
    use HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];
    
    public $filesParams = [
        'document',
    ];
}
