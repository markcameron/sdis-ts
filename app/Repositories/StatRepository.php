<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Stat;

class StatRepository extends ModuleRepository
{
    use HandleBlocks, HandleMedias;

    public function __construct(Stat $model)
    {
        $this->model = $model;
    }
}
