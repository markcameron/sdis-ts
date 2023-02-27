<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';

    /*
     * The static permalink base to your module. Defaults to /yourModuleName
     * Set to '' if your module's permalinks are directly off the root, like in a Pages module, for example
     */
    protected $permalinkBase = '';

    protected $indexOptions = [
    ];
}
