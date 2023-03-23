<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgramsController extends Controller
{
    public function index()
    {
        $data = [
            'prefooter' => true,
            'images' => [
                'img1' => asset('img/programs-services-Image.png'),
                'img2' => asset('img/group-training-image.png'),
                'img3' => asset('img/one-on-one-training-image.png'),
                'img4' => asset('img/group-cycling-image.png'),
                'img5' => asset('img/physical-therapy-image.png'),
                'img6' => asset('img/massage-services-image.png'),
                'img7' => asset('img/tanning-image.png'),
            ],
        ];

        return Inertia::render('Programs/ProgramsPage', $data);
    }
}
