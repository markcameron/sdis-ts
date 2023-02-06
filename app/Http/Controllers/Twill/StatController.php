<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class StatController extends BaseModuleController
{
    protected $moduleName = 'stats';

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected $indexColumns = [
        'title' => [
            'title' => 'Titre',
            'field' => 'title',
            'sort' => true,
        ],
        'description' => [
            'title' => 'Valeur',
            'field' => 'description',
            'sort' => true,
        ],
    ];
}
