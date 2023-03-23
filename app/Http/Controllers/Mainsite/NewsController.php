<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use App\Models\News;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('created_at')->paginate(5);

        return Inertia::render('News/Index', ['news' => $news]);
    }
}
