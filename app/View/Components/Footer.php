<?php

namespace App\View\Components;

use Illuminate\View\Component;
use A17\Twill\Repositories\SettingRepository;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer', [
            'telephone' => app(SettingRepository::class)->byKey('phone_number'),
            'telephoneLink' => app(SettingRepository::class)->byKey('phone_number_link'),
            'email' => app(SettingRepository::class)->byKey('email_contact'),
            'address' => nl2br(app(SettingRepository::class)->byKey('address')),
            'facebookUrl' => app(SettingRepository::class)->byKey('url_facebook'),
            'githubUrl' => app(SettingRepository::class)->byKey('url_github'),
        ]);
    }
}
