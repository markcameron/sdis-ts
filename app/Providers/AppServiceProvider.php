<?php

namespace App\Providers;

use Spatie\Navigation\Section;
use BeyondCode\Mailbox\InboundEmail;
use Illuminate\Support\Facades\Auth;
use App\Services\InterventionService;
use BeyondCode\Mailbox\Facades\Mailbox;
use Illuminate\Support\ServiceProvider;
use Spatie\Navigation\Facades\Navigation;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'stats' => 'App\Models\Stat',
            'emergencyNumbers' => 'App\Models\EmergencyNumber',
            'homepageHeroes' => 'App\Models\HomepageHero',
            'documents' => 'App\Models\Document',
            'pages' => 'App\Models\Page',
        ]);

        Mailbox::subject('INFO MOBILISATION', function (InboundEmail $email) {
            resolve(InterventionService::class)->createFromEmail($email);
        });

        Mailbox::fallback(function (InboundEmail $email) {
            // Just log it in DB `mailbox_inbound_emails`
        });
    }
}
