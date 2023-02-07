<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class InterventionController extends BaseModuleController
{
    protected $moduleName = 'interventions';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
