<?php

namespace App\Repositories;

use App\Models\News;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;

class NewsRepository extends ModuleRepository
{
    use HandleBlocks;
    use HandleSlugs;
    use HandleMedias;
    use HandleFiles;
    use HandleTags;
    use HandleRevisions;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function recent()
    {
        return $this->model
            ->published()
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
