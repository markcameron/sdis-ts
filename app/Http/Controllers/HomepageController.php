<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StatRepository;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, StatRepository $statRepository)
    {
        return view('front.homepage.index')
            ->with([
                'stats' => 'asd',
            ]);
    }
}
