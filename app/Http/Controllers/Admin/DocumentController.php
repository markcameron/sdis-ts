<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class DocumentController extends BaseModuleController
{
    protected $moduleName = 'documents';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
