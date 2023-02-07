<?php

namespace App\View\Components;

use A17\Twill\Models\Feature;
use Illuminate\View\Component;

class Stats extends Component
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
        return view('components.stats', [
            'stats' => Feature::forBucket('home_stats'),
        ]);
    }
}
