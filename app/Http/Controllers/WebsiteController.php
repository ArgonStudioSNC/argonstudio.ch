<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    /**
    * Show the home page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function home()
    {
        return view('home');
    }

    /**
    * Show the page to get 3DM XR app.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function get3dmapp()
    {
        return view('get-3dm-app');
    }

    /**
    * Show the gettheapp page. (argon xr)
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function app()
    {
        return view('app');
    }

    /**
    * Show the terms and policies page at signet terms-of-services-development
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function termsofservicesdevelopment()
    {
        return view('terms-and-policies')->with('pathname', 'terms-of-services-development');
    }

    /**
    * Show the terms and policies page at signet privacy-policy-apps
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function privacypolicyapps()
    {
        return view('terms-and-policies')->with('pathname', 'privacy-policy-apps');
    }
}
