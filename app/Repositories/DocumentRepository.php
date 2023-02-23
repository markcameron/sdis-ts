<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Document;

class DocumentRepository extends ModuleRepository
{
    use HandleFiles;

    public function __construct(Document $model)
    {
        $this->model = $model;
    }
}
