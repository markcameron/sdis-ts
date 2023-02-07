<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use A17\Twill\Models\Feature;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('front.homepage.index', [
            'stats' =>   Feature::forBucket('home_stats'),
        ]);
    }
}
