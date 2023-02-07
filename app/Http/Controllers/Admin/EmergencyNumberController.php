<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class EmergencyNumberController extends BaseModuleController
{
    protected $moduleName = 'emergencyNumbers';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
