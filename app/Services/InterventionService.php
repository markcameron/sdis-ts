<?php

namespace App\Services;

use App\Enums\Village;
use App\Models\Intervention;
use BeyondCode\Mailbox\InboundEmail;

class InterventionService {
    public function createFromEmail(InboundEmail $email): void
    {
        $intervention = Intervention::create([
            'title' => $email->text(),
            'description' => $this->extractType($email->text()),
            'type' => $this->extractType($email->text()),
            'village' => $this->extractVillage($email->text()),
            'date' => $email->date(),
        ]);

        $this->publishIntervention($intervention);
    }

    private function publishIntervention(Intervention $intervention): void
    {
        $fields = collect([
            $intervention->village,
            $intervention->type,
        ]);

        $publishedStatus = $fields->filter()->count() === 2;

        $intervention->update(['published' => $publishedStatus]);
    }

    public function extractType(string $text): string
    {
        preg_match('/.* - (.+) \(.*/mU', $text, $matches);
        return $matches[1];
    }

    public function extractVillage(string $text): ?string
    {
        preg_match('/.*\((.+) -.*\).*/mU', $text, $matches);
        return Village::fromIntervention($matches[1])?->value;
    }
}