<?php

namespace App\Services;

use App\Enums\Village;
use Illuminate\Support\Str;
use App\Models\Intervention;
use Illuminate\Support\Facades\Log;
use BeyondCode\Mailbox\InboundEmail;

class InterventionService
{
    public function createFromEmail(InboundEmail $email): void
    {
        Log::warning('MAIL TEXT: ', [
            'text' => $email->text()
        ]);
        Log::warning('MAIL HTML: ', [
            'html' => $email->html()
        ]);

        // Remove new lines
        $message = Str::replace(["\r", "\n"], ' ', $email->html());
        // Remove double or more consecutive spaces
        $message = Str::of($message)->replaceMatches('/ {2,}/', ' ');

        $intervention = Intervention::create([
            'title' => $message,
            'description' => $this->extractType($message),
            'type' => $this->extractType($message),
            'village' => $this->extractVillage($message),
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

    public function extractType(string $text): ?string
    {
        preg_match('/.* - (.+) \(.*/mU', $text, $matches);
        return $matches[1] ?? null;
    }

    public function extractVillage(string $text): ?string
    {
        preg_match('/.*\((.+) -.*\).*/mU', $text, $matches);
        return Village::fromIntervention($matches[1] ?? null)?->value;
    }
}