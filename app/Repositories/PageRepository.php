<?php

namespace App\Repositories;

use App\Models\Page;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;

class PageRepository extends ModuleRepository
{
    use HandleBlocks;
    use HandleSlugs;
    use HandleMedias;
    use HandleFiles;
    use HandleRevisions;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }
}
