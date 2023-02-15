<?php

namespace App\Providers;

use App\Services\InterventionService;
use BeyondCode\Mailbox\InboundEmail;
use BeyondCode\Mailbox\Facades\Mailbox;
use Illuminate\Support\ServiceProvider;
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
        ]);

        Mailbox::catchAll(function (InboundEmail $email) {
            resolve(InterventionService::class)->createFromEmail($email);
        });
    }
}
