<?php

namespace App\Http\Controllers\Mainsite;

use App\Http\Controllers\Controller;
use App\Models\Clubs\Location;
use Inertia\Inertia;

class OffersController extends Controller
{
    public function index()
    {
        $data = [
            'prefooter' => true
        ];

        return Inertia::render('Offers/OffersPage', $data);
    }

    public function free_trial()
    {
        $data = [
            'prefooter' => true,
            'bannerImg' => asset('img/free-pass-header.png'),
            'clubs' => []
        ];

        $clubs = Location::whereActive(1)->get();
        foreach($clubs as $club)
        {
            $data['clubs'][$club->id] = $club->club_name;
        }

        return Inertia::render('Offers/FreeTrial/FreeTrialPage', $data);
    }
}
