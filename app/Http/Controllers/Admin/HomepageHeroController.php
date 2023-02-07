<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class HomepageHeroController extends BaseModuleController
{
    protected $moduleName = 'homepageHeroes';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
