<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\Utility\AppState;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Prologue\Alerts\Facades\Alert;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function share(Request $request)
    {
        $shared = [
            'headerLogo' => asset('img/header-logo.png'),
            'footerShardImg' => asset('img/CTA-image.png'),
            'homeCarouselBGs' => [
                'CarouselSlide1' => 'url('.asset('img/slide1.jpeg').')',
                'CarouselSlide1Mobile' => 'url('.asset('img/slide1Mobile.jpeg').')',
                'CarouselSlide2' => 'url('.asset('img/slide2.jpeg').')',
                'CarouselSlide2Mobile' => 'url('.asset('img/slide2Mobile.jpeg').')',
                'CarouselSlide3' => 'url('.asset('img/slide3.jpeg').')',
                'CarouselSlide3Mobile' => 'url('.asset('img/slide3Mobile.jpeg').')',
            ],
            'offerImgs' => [
                'img1' => asset('img/offers-something-for-everyone.png'),
                'img2' => asset('img/offers-superior.png'),
                'img3' => asset('img/offers-3day-pass.png'),
            ]
        ];

        $previousUrl = url()->previous();

        if (!empty($previousUrl) && $previousUrl !== route('backpack.auth.login') && $previousUrl !== url()->current()) {
            $shared['previousUrl'] = $previousUrl;
        }
        $alerts = Alert::getMessages();
        return array_merge(parent::share($request), [
            'flash' => function () use ($request, $alerts) {
                return [
                    'alerts' => $alerts
                ];
            },
        ], $shared);


//        $shared['flash'] = [];
//        if(!empty($request->session()->get('selectedLeadDetailIndex'))){
//            dd('works');
//            $shared['flash']['selectedLeadDetailIndex'] = $request->session()->get('selectedLeadDetailIndex');
//        }
////        $shared[ 'flash'] = ['selectedLeadDetailIndex'=>$request->session()->get('selectedLeadDetailIndex')];
//        $shared['flash']['foo'] = 'bar';
//        return array_merge(parent::share($request), $shared);
    }
}
