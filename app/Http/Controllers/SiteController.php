<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SiteController extends Controller
{
    /**
     * Show the application home page.
     */
    public function default()
    {
        $locale = App::currentLocale();
        return redirect()->route('home', $locale);
    }

    /**
     * Show the application home page.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the application lawyers page.
     */
    public function lawyers()
    {
        return view('lawyers');
    }
}
