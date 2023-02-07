<?php

namespace App\View\Components;

use A17\Twill\Models\Feature;
use Illuminate\View\Component;

class EmergencyNumbers extends Component
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
        return view('components.emergency-numbers', [
            'numbers' => Feature::forBucket('home_emergency_numbers'),
        ]);
    }
}
