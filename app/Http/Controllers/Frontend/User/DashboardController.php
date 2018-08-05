<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{

    //TODO connect to moviedb

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //recently seen movies
        //$movies['recently_seen'] = movies->getRecentlySeen();
        //recently added movies
        //$movies['recently_added'] = movies->getRecentlyAdded();
        //movies wanted that are coming out
        //$movies['recently_available'] = movies->getRecentlyAvailable();

        return view('frontend.user.dashboard');
    }
}
