<?php

namespace App\Services;

use App\Models\Intervention;
use BeyondCode\Mailbox\InboundEmail;

class InterventionService {
    public function createFromEmail(InboundEmail $email): void
    {
        Intervention::create([
            'title' => $email->text(),
        ]);
    }
}