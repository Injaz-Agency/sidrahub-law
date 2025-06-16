<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\Service;
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
        $homeServices = Service::where('is_active', true)->whereNotNull('icon')->limit(6)->get();
        // $professionals = Professional::where('is_active', true)->inRandomOrder()->limit(20)->get();
        $professionals = Professional::inRandomOrder()->limit(20)->get();
        return view('home', compact('homeServices', 'professionals'));
    }

    /**
     * Show the application lawyers page.
     */
    public function lawyers()
    {
        $professionals = Professional::inRandomOrder()->paginate(16);
        return view('lawyers', compact('professionals'));
    }
}
