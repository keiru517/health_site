<?php

namespace App\Http\Controllers\Mainsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'prefooter' => true
        ];
        return Inertia::render('Home/HomePage', $data);
    }
}
