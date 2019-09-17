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
    * Show the gettheapp page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function gettheapp()
    {
        return view('get-the-app');
    }

    /**
    * Show the tarms and policies page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function termsandpolicies()
    {
        return view('terms-and-policies');
    }
}
