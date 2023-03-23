<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group([
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
    ),
    'namespace'  => 'App\Actions',
], function () { // custom admin routes
    Route::post('/free-trial', 'Leads\ProcessFreeTrialAction');
    Route::post('/contact', 'Contact\ProcessContactForm');
});

Route::group([
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
    ),
    'namespace'  => 'App\Http\Controllers',
], function () { // custom admin routes
    Route::get('/', 'Mainsite\HomeController@index');
    Route::get('/offers', 'Mainsite\OffersController@index');
    Route::get('/locations', 'Mainsite\LocationsController@index');
    Route::get('/clubs/{club_id}', 'Mainsite\LocationsController@show');
    Route::get('/programs', 'Mainsite\ProgramsController@index');
    Route::get('/free-trial', 'Mainsite\OffersController@free_trial');
    Route::get('/news', 'Mainsite\NewsController@index');
    Route::get('/contact', function(){
        return Inertia::render('Contact/Index');
    });
    Route::post('/contact/create', 'Mainsite\ContactController@create');
    Route::get('/counter', function(){
        return Inertia::render('Challenges/Counter');
    });
    Route::get('/amenities', function(){
        $amenities = \App\Models\Amenities::whereDeletedAt(null);
        return Inertia::render('Amenities/Index/AmenitiesPage', ['amenities'=>$amenities]);
    });
});

